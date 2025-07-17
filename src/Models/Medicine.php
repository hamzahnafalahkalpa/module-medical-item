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
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Medicine extends BaseModel
{
    use HasUlids, SoftDeletes, HasProps, HasMedicalItem;
    use HasComposition; 
    // HasEffect, HasIndication, HasContraIndication;

    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
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
        'package_form_id'
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
            'package_form'      => 'props->package_form',
            'therapeutic_class' => 'props->therapeutic_class'
        ];
    }

    protected static function booted(): void
    {
        parent::booted();
        static::creating(function ($query) {
            $query->medicine_code ??= static::hasEncoding('MEDICINE_CODE');
        });
    }

    public function getViewResource(){return ViewMedicine::class;}
    public function getShowResource(){return ShowMedicine::class;}

    public function scopeIsNarcotic($builder){return $builder->where('is_narcotic', true);}
    public function scopeIsHighAlert($builder){return $builder->where('is_high_alert', true);}
    public function scopeIsAntibiotic($builder){return $builder->where('is_antibiotic', true);}
    public function scopeIsLasa($builder){return $builder->where('is_lasa', true);}
    public function sediaan(){return $this->belongsToModel('DosageForm', 'dosage_form_id');}
    public function usageLocation(){return $this->belongsToModel('UsageLocation', 'usage_location_id');}
    public function usageRoute(){return $this->belongsToModel('ItemStuff', 'usage_route_id');}
    public function therapeuticClass(){return $this->belongsToModel('ItemStuff', 'therapeutic_class_id');}
    public function dosageForm(){return $this->belongsToModel('ItemStuff', 'dosage_form_id');}
    public function packageForm(){return $this->belongsToModel('ItemStuff', 'package_form_id');}
}
