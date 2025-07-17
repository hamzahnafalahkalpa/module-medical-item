<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\ItemStuffData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\DosageFormData as DataDosageFormData;

class DosageFormData extends ItemStuffData implements DataDosageFormData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'DosageForm';
        parent::before($attributes);
    }
}