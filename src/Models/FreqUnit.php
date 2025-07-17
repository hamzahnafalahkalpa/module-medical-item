<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\ModuleMedicalItem\Resources\FreqUnit\{
    ViewFreqUnit,
    ShowFreqUnit
};

class FreqUnit extends ItemStuff
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewFreqUnit::class;
    }

    public function getShowResource(){
        return ShowFreqUnit::class;
    }
}
