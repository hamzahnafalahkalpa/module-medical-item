<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\ItemStuff;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\DosageForm as ContractsDosageForm;

class DosageForm extends ItemStuff implements ContractsDosageForm
{
    protected string $__entity = 'DosageForm';
    public static $dosage_form_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'dosage_form',
            'tags'     => ['dosage_form', 'dosage_form-index'],
            'duration' => 24 * 60
        ]
    ];
}