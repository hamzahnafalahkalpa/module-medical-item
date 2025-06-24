<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\ItemStuffData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\UsageRouteData as DataUsageRouteData;

class UsageRouteData extends ItemStuffData implements DataUsageRouteData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'UsageRoute';
        parent::before($attributes);
    }
}