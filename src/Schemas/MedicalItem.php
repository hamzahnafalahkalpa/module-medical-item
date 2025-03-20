<?php

namespace Gii\ModuleMedicalItem\Schemas;

use COM;
use Gii\ModuleItem\Schemas\Item as SchemaItem;
use Gii\ModuleItem\Contracts as ItemContracts;
use Gii\ModuleMedicalItem\Contracts;
use Gii\ModuleMedicalItem\Resources\MedicalItem\{
    ShowMedicalItem, ViewMedicalItem
};
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class MedicalItem extends SchemaItem implements Contracts\MedicalItem{
    protected array $__guard   = ['id','reference_type','reference_id'];
    protected array $__add     = ['is_pom','status'];
    protected string $__entity = 'MedicalItem';
    public static $medical_item_model;

    protected array $__resources = [
        'view' => ViewMedicalItem::class,
        'show' => ShowMedicalItem::class
    ];

    protected array $__cache = [
        'index' => [
            'name'     => 'medical-item',
            'tags'     => ['medical-item','medical-item-index'],
            'duration' => 60*24
        ],
        'show' => [
            'name'     => 'medical-item',
            'tags'     => ['medical-item','medical-item-show'],
            'duration' => 60*24
        ]
    ];

    protected function showUsingRelation(){
        return [
            'item' => function($query){
                $query->with(['compositions','itemStock' => function($query){
                    $query->whereNull('funding_id')
                          ->with([
                            'childs.stockBatches.batch','stockBatches.batch'
                          ]);
                }]);
            },
            'reference' => function($query){
                $query->morphWith([
                    $this->MedicineModelInstance() => [
                        'dosageForm','usageLocation','therapeuticClass',
                        'usageRoute','packageCategory','sellingCategory'
                    ],
                    $this->MedicToolModelInstance() => [

                    ]
                ]);
            }
        ];
    }

    private function localAddSuffixCache(mixed $suffix): void{
        $this->addSuffixCache($this->__cache['index'],"medical-item-index",$suffix);
    }

    public function commonMedicalItem(mixed $morphs,mixed $conditionals = null): Builder{
        $morphs = $this->mustArray($morphs);
        return $this->medicalItem($conditionals)->whereIn('reference_type',$morphs)
                        ->orderBy('name','asc');
    }

    public function getMedicalItem(): mixed{
        return static::$medical_item_model;
    }

    public function prepareStoreMedicalItem(? array $attributes = null): Model{
        $attributes ??= request()->all();
        if(isset($attributes['id'])){
            $medicalItem = $this->medicalItem()->with('reference')->find($attributes['id']);
            $reference = $medicalItem->reference;
        }

        if (isset($attributes['medicine'])){
            if (isset($reference)) $attributes['medicine']['id'] = $reference->getKey();
            $attributes['medicine']['name'] = $attributes['name'];
            $medicine_schema = $this->schemaContract('medicine');
            $reference = $medicine_schema->prepareStoreMedicine($attributes['medicine']);
            $reference->load('medicalItem');
        }

        if (isset($attributes['medictool'])){
            if (isset($reference)) $attributes['medictool']['id'] = $reference->getKey();
            $attributes['medictool']['name'] = $attributes['name'];
            $medictool_schema = $this->schemaContract('medic_tool');
            $reference = $medictool_schema->prepareStoreMedicTool($attributes['medictool']);
            $reference->load('medicalItem');
        }
        $medicalItem ??= $reference->medicalItem;
        if (isset($attributes['medical_item_code'])) $medicalItem->medical_item_code = $attributes['medical_item_code'];
        $medicalItem->name = $attributes['name'];
        $medicalItem->is_pom = $attributes['is_pom'] ?? false;
        $medicalItem->registration_no = $attributes['registration_no'] ?? null;
        if (!isset($attributes['id'])){
            $medicalItem->reference_id   = $reference->getKey();
            $medicalItem->reference_type = $reference->getMorphClass();
        }
        $medicalItem->save();
        $attributes['item']['id']   = $medicalItem->item->getKey();
        $attributes['item']['name'] = $attributes['name'];
        $attributes['item']['reference_id']   = $medicalItem->getKey();
        $attributes['item']['reference_type'] = $medicalItem->getMorphClass();
        $item = $this->schemaContract('item')->prepareStoreItem($attributes['item']);
        static::$medical_item_model = $medicalItem;
        return $medicalItem;
    }

    public function storeMedicalItem(): array{
        return $this->transaction(function() {
            return $this->showMedicalItem($this->prepareStoreMedicalItem());
        });
    }

    public function prepareShowMedicalItem(? Model $model = null): Model{
        $this->booting();
        $model ??= $this->getMedicalItem();

        if (!isset($model)){
            $id = request()->id;
            if (!request()->has('id')) throw new \Exception('No id provided',422);

            $this->addSuffixCache($this->__cache['show'],'medical-item-show',$id);
            $model = $this->cacheWhen(!$this->isSearch(),$this->__cache['show'],function() use ($id) {
                return $this->MedicalItemModel()->with($this->showUsingRelation())->find($id);
            });
        }else{
            $model->load($this->showUsingRelation());
        }
        static::$medical_item_model = $model;
        $this->forgetTags('medical-item');
        return $model;
    }


    public function showMedicalItem(? Model $model = null): array{
        return $this->transforming($this->__resources['show'],function() use ($model){
            return $this->prepareShowMedicalItem($model);
        });
    }

    public function prepareViewMedicalItemPaginate(mixed $cache_reference_type,? array $morphs = null, int $perPage = 50, array $columns = ['*'], string $pageName = 'page',? int $page = null,? int $total = null): LengthAwarePaginator{
        $morphs ??= $cache_reference_type;
        $paginate_options = compact('perPage', 'columns', 'pageName', 'page', 'total');
        if (isset(request()->warehouse_id)){
            $cache_reference_type .= '-'.request()->warehouse_id;
        }
        $cache_reference_type .= '-paginate';
        $this->localAddSuffixCache($cache_reference_type);
        return $this->cacheWhen(!$this->isSearch(),$this->__cache['index'],function() use ($morphs, $paginate_options){
            return $this->commonMedicalItem($morphs)
                        ->when(isset(request()->warehouse_id),function($query){
                            $query->whereHas('item.itemStock',function($query){
                                $query->whereNull('funding_id')
                                      ->where('warehouse_id',request()->warehouse_id)
                                      ->where('warehouse_type',request()->warehouse_type);
                            });
                        })->paginate(...$this->arrayValues($paginate_options));
        });
    }

    public function viewMedicalItemPaginate(mixed $reference_type, ? array $morphs = null, int $perPage = 50, array $columns = ['*'], string $pageName = 'page',? int $page = null,? int $total = null): array{
        $paginate_options = compact('perPage', 'columns', 'pageName', 'page', 'total');
        return $this->transforming($this->__resources['view'],function() use ($reference_type, $morphs, $paginate_options){
            return $this->prepareViewMedicalItemPaginate($reference_type, $morphs, ...$this->arrayValues($paginate_options));
        });
    }

    public function prepareViewMedicalItemList(mixed $cache_reference_type,? array $morphs = null): Collection{
        $morphs ??= $cache_reference_type;
        $this->localAddSuffixCache($cache_reference_type);
        return $this->cacheWhen(!$this->isSearch(),$this->__cache['index'],fn () => $this->commonMedicalItem($morphs)->get());
    }

    public function viewMedicalItemList(mixed $cache_reference_type, ? array $morphs = null): array{
        return $this->transforming($this->__resources['view'],fn () => $this->prepareViewMedicalItemList($cache_reference_type, $morphs));
    }

    public function medicalItem(mixed $conditionals=null): Builder{
        $this->booting();
        return $this->MedicalItemModel()->with([
            'item.itemStock', 'reference' => function($query){
                $query->morphWith([
                   $this->MedicineModelInstance() => ['dosageForm','sellingCategory'],
                ]);
            }
        ])->withParameters()->conditionals($conditionals);
    }
}
