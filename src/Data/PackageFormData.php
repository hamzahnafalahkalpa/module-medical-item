<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\ItemStuffData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\PackageFormData as DataPackageFormData;

class PackageFormData extends ItemStuffData implements DataPackageFormData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'PackageForm';
        parent::before($attributes);
    }
}