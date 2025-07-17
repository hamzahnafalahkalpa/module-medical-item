<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\InventoryItemData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\HealthcareEquipmentData as DataHealthcareEquipmentData;

class HealthcareEquipmentData extends InventoryItemData implements DataHealthcareEquipmentData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'HealthcareEquipment';
        parent::before($attributes);
    }
}