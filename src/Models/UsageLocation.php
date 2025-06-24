<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\ModuleMedicalItem\Resources\UsageLocation\{
    ViewUsageLocation,
    ShowUsageLocation
};

class UsageLocation extends ItemStuff
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewUsageLocation::class;
    }

    public function getShowResource(){
        return ShowUsageLocation::class;
    }
}
