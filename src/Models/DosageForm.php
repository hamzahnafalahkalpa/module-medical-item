<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\ModuleMedicalItem\Resources\DosageForm\{
    ViewDosageForm,
    ShowDosageForm
};

class DosageForm extends ItemStuff
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewDosageForm::class;
    }

    public function getShowResource(){
        return ShowDosageForm::class;
    }
}
