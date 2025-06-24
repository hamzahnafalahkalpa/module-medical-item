<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\ItemStuff;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\MedicalCompositionUnit as ContractsMedicalCompositionUnit;

class MedicalCompositionUnit extends ItemStuff implements ContractsMedicalCompositionUnit
{
    protected string $__entity = 'MedicalCompositionUnit';
    public static $medical_composition_unit_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'medical_composition_unit',
            'tags'     => ['medical_composition_unit', 'medical_composition_unit-index'],
            'duration' => 24 * 60
        ]
    ];
}