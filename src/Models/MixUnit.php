<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\ModuleMedicalItem\Resources\MixUnit\{
    ViewMixUnit,
    ShowMixUnit
};

class MixUnit extends ItemStuff
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewMixUnit::class;
    }

    public function getShowResource(){
        return ShowMixUnit::class;
    }
}
