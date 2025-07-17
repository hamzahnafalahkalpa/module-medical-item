<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\ItemStuffData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\UsageLocationData as DataUsageLocationData;

class UsageLocationData extends ItemStuffData implements DataUsageLocationData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'UsageLocation';
        parent::before($attributes);
    }
}