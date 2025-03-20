<?php

namespace Gii\ModuleMedicalItem\Models;

use Gii\ModuleItem\Concerns\HasItem;
use Gii\ModuleMedicalItem\Enums\Medical\Status;
use Gii\ModuleMedicalItem\Resources\MedicalItem\ShowMedicalItem;
use Gii\ModuleMedicalItem\Resources\MedicalItem\ViewMedicalItem;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zahzah\LaravelHasProps\Concerns\HasProps;
use Zahzah\LaravelSupport\Models\BaseModel;

class MedicalItem extends BaseModel
{
    use SoftDeletes, HasProps, HasItem;

    //is_pom => POM (precription only medicine)
    public $list = ['id', 'name', 'registration_no', 'reference_type', 'reference_id' , 'is_pom', 'status', 'props'];
    public $show = [];

    protected $casts = [
        'name' => 'string'
    ];

    protected static function booted(): void{
        parent::booted();
        static::creating(function($query){
            if (!isset($query->medical_item_code)){
                $query->medical_item_code = static::hasEncoding('MEDICAL_ITEM_CODE'); 
            }
            if (!isset($query->status)) $query->status = Status::ACTIVE->value;
        });
    }

    public function toViewApi(){
        return new ViewMedicalItem($this);
    }

    public function toShowApi(){
        return new ShowMedicalItem($this);
    }

    public function reference(){return $this->morphTo();}
    public function packaging(){return $this->belongsToModel('ItemStuff');}
}
