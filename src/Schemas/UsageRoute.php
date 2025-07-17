<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\ItemStuff;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\UsageRoute as ContractsUsageRoute;

class UsageRoute extends ItemStuff implements ContractsUsageRoute
{
    protected string $__entity = 'UsageRoute';
    public static $usage_route_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'usage_route',
            'tags'     => ['usage_route', 'usage_route-index'],
            'duration' => 24 * 60
        ]
    ];
}