<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\ItemStuffData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\TherapeuticClassData as DataTherapeuticClassData;

class TherapeuticClassData extends ItemStuffData implements DataTherapeuticClassData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'TherapeuticClass';
        parent::before($attributes);
    }
}