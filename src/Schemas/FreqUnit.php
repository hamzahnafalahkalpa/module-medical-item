<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\ItemStuff;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\FreqUnit as ContractsFreqUnit;

class FreqUnit extends ItemStuff implements ContractsFreqUnit
{
    protected string $__entity = 'FreqUnit';
    public $freq_unit_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'freq_unit',
            'tags'     => ['freq_unit', 'freq_unit-index'],
            'duration' => 24 * 60
        ]
    ];
}