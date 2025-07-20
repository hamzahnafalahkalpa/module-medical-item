<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\InventoryItem;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\HealthcareEquipment as ContractsHealthcareEquipment;

class HealthcareEquipment extends InventoryItem implements ContractsHealthcareEquipment
{
    protected string $__entity = 'HealthcareEquipment';
    public $healthcare_equipment_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'healthcare_equipment',
            'tags'     => ['healthcare_equipment', 'healthcare_equipment-index'],
            'duration' => 24 * 60
        ]
    ];
}