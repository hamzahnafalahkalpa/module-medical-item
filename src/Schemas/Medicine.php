<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicineData;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\Medicine as SchemasMedicine;
use Hanafalah\ModuleMedicalItem\Supports\BaseModuleMedicalItem;
use Illuminate\Database\Eloquent\Model;

class Medicine extends BaseModuleMedicalItem implements SchemasMedicine
{
    protected string $__entity = 'Medicine';
    public $medicine_model;

    public function prepareStore(MedicineData $medicine_dto): Model{
        $medicine = $this->prepareStoreMedicine($medicine_dto);
        return $medicine;
    }

    public function prepareStoreMedicine(MedicineData $medicine_dto): Model{
        $medicine = $this->usingEntity()->updateOrCreate([
            'id' => $medicine_dto->id ?? null
        ], [
            'name'                 => $medicine_dto->name,
            'acronym'              => $medicine_dto->acronym ?? null,
            'is_lasa'              => $medicine_dto->is_lasa ?? false,
            'is_antibiotic'        => $medicine_dto->is_antibiotic ?? false,
            'is_high_alert'        => $medicine_dto->is_high_alert ?? false,
            'is_narcotic'          => $medicine_dto->is_narcotic ?? false,
            'usage_location_id'    => $medicine_dto->usage_location_id ?? null,
            'usage_route_id'       => $medicine_dto->usage_route_id ?? null,
            'therapeutic_class_id' => $medicine_dto->therapeutic_class_id ?? null,
            'dosage_form_id'       => $medicine_dto->dosage_form_id ?? null,
            'package_form_id'      => $medicine_dto->package_form_id ?? null,
        ]);
        $this->fillingProps($medicine,$medicine_dto->props);
        $medicine->save();
        return $this->medicine_model = $medicine;
    }
}
