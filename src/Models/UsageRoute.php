<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\ModuleMedicalItem\Resources\UsageRoute\{
    ViewUsageRoute,
    ShowUsageRoute
};

class UsageRoute extends ItemStuff
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewUsageRoute::class;
    }

    public function getShowResource(){
        return ShowUsageRoute::class;
    }
}
