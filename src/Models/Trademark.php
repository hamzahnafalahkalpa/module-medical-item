<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\ModuleMedicalItem\Resources\Trademark\{
    ViewTrademark,
    ShowTrademark
};

class Trademark extends ItemStuff
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewTrademark::class;
    }

    public function getShowResource(){
        return ShowTrademark::class;
    }
}
