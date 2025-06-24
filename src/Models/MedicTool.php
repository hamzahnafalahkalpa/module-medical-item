<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleMedicalItem\Concerns\HasMedicalItem;
use Hanafalah\ModuleMedicalItem\Enums\Medical\Status;
use Hanafalah\ModuleMedicalItem\Resources\MedicTool\{
    ViewMedicTool, ShowMedicTool
};
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class MedicTool extends BaseModel
{
    use HasUlids, SoftDeletes, HasProps, HasMedicalItem;

    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    protected $list = ["id", "name", "status", "props"];
    protected $show = [];

    protected $casts = [
        'name' => 'string'
    ];

    protected static function booted(): void
    {
        parent::booted();
        static::creating(function ($query) {
            $query->medic_tool_code ??= static::hasEncoding('MEDICTOOL_CODE');
            $query->status ??= Status::ACTIVE->value;
        });
    }
    public function getViewResource(){return ViewMedicTool::class;}
    public function getShowResource(){return ShowMedicTool::class;}
}
