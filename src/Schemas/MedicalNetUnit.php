<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\ItemStuff;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\MedicalNetUnit as ContractsMedicalNetUnit;

class MedicalNetUnit extends ItemStuff implements ContractsMedicalNetUnit
{
    protected string $__entity = 'MedicalNetUnit';
    public static $medical_net_unit_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'medical_net_unit',
            'tags'     => ['medical_net_unit', 'medical_net_unit-index'],
            'duration' => 24 * 60
        ]
    ];
}