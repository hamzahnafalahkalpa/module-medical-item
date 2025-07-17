<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\ItemStuffData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicalNetUnitData as DataMedicalNetUnitData;

class MedicalNetUnitData extends ItemStuffData implements DataMedicalNetUnitData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'MedicalNetUnit';
        parent::before($attributes);
    }
}