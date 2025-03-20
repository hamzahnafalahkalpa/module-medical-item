<?php

namespace Gii\ModuleMedicalItem\Models;

use Gii\ModuleMedicalItem\Concerns\HasMedicalItem;
use Gii\ModuleMedicalItem\Enums\Medical\Status;
use Gii\ModuleMedicalItem\Resources\MedicTool\{
    ViewMedicTool, ShowMedicTool
};
use Illuminate\Database\Eloquent\SoftDeletes;
use Zahzah\LaravelHasProps\Concerns\HasProps;
use Zahzah\LaravelSupport\Models\BaseModel;

class MedicTool extends BaseModel
{
    use SoftDeletes, HasProps, HasMedicalItem;

    protected $list = ["id", "name", "status", "props"];
    protected $show = [];

    protected $casts = [
        'name' => 'string'
    ];

    protected static function booted(): void{
        parent::booted();
        static::creating(function($query){
            if (!isset($query->medictool_code)){
                $query->medictool_code = static::hasEncoding('MEDICTOOL_CODE'); 
            }
            if (!isset($query->status)) $query->status = Status::ACTIVE->value;
        });
    }

    public function toViewApi(){
        return new ViewMedicTool($this);
    }

    public function toShowApi(){
        return new ShowMedicTool($this);
    }
}
