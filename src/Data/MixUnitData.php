<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\ItemStuffData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\MixUnitData as DataMixUnitData;

class MixUnitData extends ItemStuffData implements DataMixUnitData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'MixUnit';
        parent::before($attributes);
    }
}