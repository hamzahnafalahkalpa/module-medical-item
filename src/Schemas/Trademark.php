<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\ItemStuff;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\Trademark as ContractsTrademark;

class Trademark extends ItemStuff implements ContractsTrademark
{
    protected string $__entity = 'Trademark';
    public static $trademark_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'trademark',
            'tags'     => ['trademark', 'trademark-index'],
            'duration' => 24 * 60
        ]
    ];
}