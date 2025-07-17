<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\ItemStuff;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\MixUnit as ContractsMixUnit;

class MixUnit extends ItemStuff implements ContractsMixUnit
{
    protected string $__entity = 'MixUnit';
    public static $mix_unit_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'mix_unit',
            'tags'     => ['mix_unit', 'mix_unit-index'],
            'duration' => 24 * 60
        ]
    ];
}