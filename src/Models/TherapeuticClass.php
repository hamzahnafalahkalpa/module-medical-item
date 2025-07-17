<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\ModuleMedicalItem\Resources\TherapeuticClass\{
    ViewTherapeuticClass,
    ShowTherapeuticClass
};

class TherapeuticClass extends ItemStuff
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewTherapeuticClass::class;
    }

    public function getShowResource(){
        return ShowTherapeuticClass::class;
    }
}
