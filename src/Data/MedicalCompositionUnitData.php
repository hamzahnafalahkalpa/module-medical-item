<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\ItemStuffData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicalCompositionUnitData as DataMedicalCompositionUnitData;

class MedicalCompositionUnitData extends ItemStuffData implements DataMedicalCompositionUnitData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'MedicalCompositionUnit';
        parent::before($attributes);
    }
}