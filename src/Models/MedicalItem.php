<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Concerns\HasItem;
use Hanafalah\ModuleMedicalItem\Enums\Medical\Status;
use Hanafalah\ModuleMedicalItem\Resources\MedicalItem\ShowMedicalItem;
use Hanafalah\ModuleMedicalItem\Resources\MedicalItem\ViewMedicalItem;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;

class MedicalItem extends BaseModel
{
    use SoftDeletes, HasProps, HasItem;

    //is_pom => POM (precription only medicine)
    public $list = ['id', 'name', 'registration_no', 'reference_type', 'reference_id', 'is_pom', 'status', 'props'];
    public $show = [];

    protected $casts = [
        'name' => 'string'
    ];

    protected static function booted(): void
    {
        parent::booted();
        static::creating(function ($query) {
            if (!isset($query->medical_item_code)) {
                $query->medical_item_code = static::hasEncoding('MEDICAL_ITEM_CODE');
            }
            if (!isset($query->status)) $query->status = Status::ACTIVE->value;
        });
    }

    public function getViewResource()
    {
        return ViewMedicalItem::class;
    }

    public function getShowResource()
    {
        return ShowMedicalItem::class;
    }

    public function reference()
    {
        return $this->morphTo();
    }
    public function packaging()
    {
        return $this->belongsToModel('ItemStuff');
    }
}
