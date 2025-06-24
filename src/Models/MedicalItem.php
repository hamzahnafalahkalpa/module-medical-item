<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Concerns\HasItem;
use Hanafalah\ModuleMedicalItem\Enums\Medical\Status;
use Hanafalah\ModuleMedicalItem\Resources\MedicalItem\ShowMedicalItem;
use Hanafalah\ModuleMedicalItem\Resources\MedicalItem\ViewMedicalItem;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class MedicalItem extends BaseModel
{
    use HasUlids, SoftDeletes, HasProps, HasItem;

    public $incrementing = false;
    protected $keyType   = 'string';
    protected $primaryKey = 'id';

    //is_pom => POM (precription only medicine)
    public $list = [
        'id', 'name', 'registration_no', 
        'medical_item_code', 'reference_type', 'reference_id', 
        'is_pom', 'status', 'props'
    ];
    public $show = [];

    protected $casts = [
        'name' => 'string',
        'reference_type' => 'string'
    ];

    protected static function booted(): void{
        parent::booted();
        static::creating(function ($query) {
            $query->medical_item_code ??= static::hasEncoding('MEDICAL_ITEM_CODE');
            $query->status ??= self::getStatus('ACTIVE');
        });
    }


    public static function getStatus(string $status){
        return Status::from($status)->value;
    }

    public function viewUsingRelation(): array{
        return [
            'item.itemStock',
            'reference' => function ($query) {
                $query->morphWith([
                    $this->MedicineModelInstance() => ['dosageForm'],
                ]);
            }
        ];
    }

    public function showUsingRelation(): array{
        return [
            'item' => function ($query) {
                $query->with(['compositions', 'itemStock' => function ($query) {
                    $query->whereNull('funding_id')
                        ->with([
                            'childs.stockBatches.batch',
                            'stockBatches.batch'
                        ]);
                }]);
            },
            'reference' => function ($query) {
                $query->morphWith([
                    $this->MedicineModelInstance() => [
                        'dosageForm',
                        'usageLocation',
                        'therapeuticClass',
                        'usageRoute',
                        'packageForm'
                    ],
                    $this->MedicToolModelInstance() => []
                ]);
            }
        ];
    }

    public function getViewResource(){return ViewMedicalItem::class;}
    public function getShowResource(){return ShowMedicalItem::class;}
    public function reference(){return $this->morphTo();}
    public function packaging(){return $this->belongsToModel('ItemStuff');}
}
