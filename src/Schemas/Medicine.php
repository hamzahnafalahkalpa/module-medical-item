<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts;
use Hanafalah\ModuleMedicalItem\Resources\Medicine\{
    ShowMedicine,
    ViewMedicine
};
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Medicine extends MedicalItem implements Contracts\Medicine
{
    protected array $__guard   = ['id'];
    protected array $__add     = [
        'name',
        'status',
        'acronym',
        'is_lasa',
        'is_antibiotic',
        'is_high_alert',
        'is_narcotic',
        'usage_location_id',
        'usage_route_id',
        'therapeutic_class_id',
        'dosage_form_id',
        'package_category_id',
        'selling_category_id'
    ];
    protected string $__entity = 'Medicine';
    public static $medicine_model;

    protected array $__resources = [
        'view' => ViewMedicine::class,
        'show' => ShowMedicine::class
    ];

    public function prepareStoreMedicine(?array $attributes = null): Model
    {
        $attributes ??= request()->all();
        $medicine = $this->MedicineModel()->updateOrCreate([
            'id' => $attributes['id'] ?? null
        ], [
            'name'                 => $attributes['name'],
            'acronym'              => $attributes['acronym'] ?? null,
            'is_lasa'              => $attributes['is_lasa'] ?? false,
            'is_antibiotic'        => $attributes['is_antibiotic'] ?? false,
            'is_high_alert'        => $attributes['is_high_alert'] ?? false,
            'is_narcotic'          => $attributes['is_narcotic'] ?? false,
            'usage_location_id'    => $attributes['usage_location_id'] ?? null,
            'usage_route_id'       => $attributes['usage_route_id'] ?? null,
            'therapeutic_class_id' => $attributes['therapeutic_class_id'] ?? null,
            'dosage_form_id'       => $attributes['dosage_form_id'] ?? null,
            'selling_category_id'  => $attributes['selling_category_id'] ?? null,
            'package_category_id'  => $attributes['package_category_id'] ?? null,
        ]);

        static::$medicine_model = $medicine;
        return $medicine;
    }

    public function medicine(mixed $conditionals = null): Builder
    {
        $this->booting();
        return $this->MedicineModel()->withParameters()->conditionals($conditionals);
    }
}
