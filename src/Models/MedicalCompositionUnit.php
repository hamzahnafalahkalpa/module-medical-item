<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\ModuleMedicalItem\Resources\MedicalCompositionUnit\{
    ViewMedicalCompositionUnit,
    ShowMedicalCompositionUnit
};

class MedicalCompositionUnit extends ItemStuff
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewMedicalCompositionUnit::class;
    }


    public function getShowResource(){
        return ShowMedicalCompositionUnit::class;
    }
}
