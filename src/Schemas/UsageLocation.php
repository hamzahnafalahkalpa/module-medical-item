<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\ItemStuff;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\UsageLocation as ContractsUsageLocation;

class UsageLocation extends ItemStuff implements ContractsUsageLocation
{
    protected string $__entity = 'UsageLocation';
    public static $usage_location_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'usage_location',
            'tags'     => ['usage_location', 'usage_location-index'],
            'duration' => 24 * 60
        ]
    ];
}