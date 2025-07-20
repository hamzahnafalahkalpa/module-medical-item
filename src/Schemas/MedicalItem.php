<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicalItemData;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\MedicalItem as SchemasMedicalItem;
use Hanafalah\ModuleMedicalItem\Supports\BaseModuleMedicalItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MedicalItem extends BaseModuleMedicalItem implements SchemasMedicalItem
{
    protected string $__entity = 'MedicalItem';
    public $medical_item_model;

    protected array $__cache = [
        'index' => [
            'name'     => 'medical_item',
            'tags'     => ['medical_item', 'medical_item-index'],
            'duration' => 60 * 24
        ],
        'show' => [
            'name'     => 'medical_item',
            'tags'     => ['medical_item', 'medical_item-show'],
            'duration' => 60 * 24
        ]
    ];

    public function prepareStoreMedicalItem(MedicalItemData $medical_item_dto): Model{
        $reference_type   = $medical_item_dto->reference_type;
        $reference_schema = config('module-medical-item.medical_item_types.'.Str::snake($reference_type).'.schema');        
        if (isset($reference_schema)) {
            $schema_reference = $this->schemaContract(Str::studly($reference_schema));
            $reference = $schema_reference->prepareStore($medical_item_dto->reference);
            $medical_item_dto->reference_id = $reference->getKey();
            $medical_item_dto->props['prop_reference'] = $reference->toViewApi()->resolve();
        }

        $add = [    
            'registration_no'   => $medical_item_dto->registration_no,
            'name'              => $medical_item_dto->name,
            'is_pom'            => $medical_item_dto->is_pom,
            'medical_item_code' => $medical_item_dto->medical_item_code 
        ];
        $guard = isset($medical_item_dto->id) 
            ? ['id' => $medical_item_dto->id]
            : [
                'reference_type' => $medical_item_dto->reference_type, 
                'reference_id'   => $medical_item_dto->reference_id
            ];
        $medical_item = $this->usingEntity()->updateOrCreate($guard, $add);
        $medical_item->refresh();
        if (isset($reference_schema) && method_exists($schema_reference, 'onCreated')) {
            $schema_reference->onCreated($medical_item, $reference, $medical_item_dto);
        }

        if (isset($medical_item_dto->item)){
            $medical_item_dto->item->reference_model = $medical_item;
            $item = $this->schemaContract('item')->prepareStoreItem($medical_item_dto->item);
            $medical_item_dto->props['prop_item'] = $item->toViewApi()->resolve();
        }
        $this->fillingProps($medical_item,$medical_item_dto->props);
        $medical_item->save();
        return $medical_item;
    }

    public function medicalItem(mixed $conditionals = null): Builder{
        return $this->generalSchemaModel($conditionals)->when(isset(request()->warehouse_id), function ($query) {
                    return $query->whereHas('item.itemStock', function ($query) {
                        $query->whereNull('funding_id')
                                ->where('warehouse_id', request()->warehouse_id)
                                ->where('warehouse_type', request()->warehouse_type);
                    });
                });        
    }
}
