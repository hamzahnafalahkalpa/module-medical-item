<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\ModuleMedicalItem\Resources\MedicalNetUnit\{
    ViewMedicalNetUnit,
    ShowMedicalNetUnit
};

class MedicalNetUnit extends ItemStuff
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewMedicalNetUnit::class;
    }


    public function getShowResource(){
        return ShowMedicalNetUnit::class;
    }
}
