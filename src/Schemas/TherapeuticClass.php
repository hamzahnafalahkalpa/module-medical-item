<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\ItemStuff;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\TherapeuticClass as ContractsTherapeuticClass;

class TherapeuticClass extends ItemStuff implements ContractsTherapeuticClass
{
    protected string $__entity = 'TherapeuticClass';
    public static $therapeutic_class_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'therapeutic_class',
            'tags'     => ['therapeutic_class', 'therapeutic_class-index'],
            'duration' => 24 * 60
        ]
    ];
}