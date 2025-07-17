<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\ModuleMedicalItem\Resources\PackageForm\{
    ViewPackageForm,
    ShowPackageForm
};

class PackageForm extends ItemStuff
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewPackageForm::class;
    }

    public function getShowResource(){
        return ShowPackageForm::class;
    }
}
