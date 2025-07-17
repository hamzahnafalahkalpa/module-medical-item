<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\ItemStuffData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\FreqUnitData as DataFreqUnitData;

class FreqUnitData extends ItemStuffData implements DataFreqUnitData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'FreqUnit';
        parent::before($attributes);
    }
}