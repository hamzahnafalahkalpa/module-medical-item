<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Concerns\HasComposition;
use Hanafalah\ModuleMedicalItem\Concerns\HasMedicalItem;
use Hanafalah\ModuleMedicalItem\Enums\Medical\Status;
use Hanafalah\ModuleMedicalItem\Resources\Medicine\ShowMedicine;
use Hanafalah\ModuleMedicalItem\Resources\Medicine\ViewMedicine;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;

class Medicine extends BaseModel
{
    use SoftDeletes, HasProps, HasMedicalItem;
    use HasComposition;
    // , HasEffect, HasIndication, HasContraIndication;

    protected $list  = ["id", "name", "status", "props"];
    protected $show = [
        'acronym',
        'is_lasa',
        'is_antibiotic',
        'is_high_alert',
        'is_narcotic',
        'usage_location_id',
        'usage_route_id',
        'therapeutic_class_id',
        'dosage_form_id',
        'selling_category_id',
        'package_category_id'
    ];

    protected $casts = [
        'name'              => 'string',
        'therapeutic_class' => 'string'
    ];

    public function getPropsQuery(): array
    {
        return [
            'usage_location'    => 'props->usage_location',
            'usage_route'       => 'props->usage_route',
            'dosage_form'       => 'props->dosage_form',
            'selling_category'  => 'props->selling_category',
            'package_category'  => 'props->package_category',
            'therapeutic_class' => 'props->therapeutic_class'
        ];
    }

    protected static function booted(): void
    {
        parent::booted();
        static::creating(function ($query) {
            if (!isset($query->medicine_code)) {
                $query->medicine_code = static::hasEncoding('MEDICINE_CODE');
            }
            if (!isset($query->status)) $query->status = Status::ACTIVE->value;
        });
    }

    public function getViewResource()
    {
        return ViewMedicine::class;
    }

    public function getShowResource()
    {
        return ShowMedicine::class;
    }

    public function scopeIsNarcotic($builder)
    {
        return $builder->where('is_narcotic', true);
    }
    public function scopeIsHighAlert($builder)
    {
        return $builder->where('is_high_alert', true);
    }
    public function scopeIsAntibiotic($builder)
    {
        return $builder->where('is_antibiotic', true);
    }
    public function scopeIsLasa($builder)
    {
        return $builder->where('is_lasa', true);
    }

    public function sediaan()
    {
        return $this->belongsToModel('ItemStuff', 'sediaan_id');
    }
    public function usageLocation()
    {
        return $this->belongsToModel('ItemStuff', 'usage_location_id');
    }
    public function usageRoute()
    {
        return $this->belongsToModel('ItemStuff', 'usage_route_id');
    }
    public function therapeuticClass()
    {
        return $this->belongsToModel('ItemStuff', 'therapeutic_class_id');
    }
    public function dosageForm()
    {
        return $this->belongsToModel('ItemStuff', 'dosage_form_id');
    }
    public function packageCategory()
    {
        return $this->belongsToModel('ItemStuff', 'package_category_id');
    }
    public function sellingCategory()
    {
        return $this->belongsToModel('ItemStuff', 'selling_category_id');
    }
}
