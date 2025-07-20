<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleItem\Schemas\ItemStuff;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\PackageForm as ContractsPackageForm;

class PackageForm extends ItemStuff implements ContractsPackageForm
{
    protected string $__entity = 'PackageForm';
    public $package_form_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'package_form',
            'tags'     => ['package_form', 'package_form-index'],
            'duration' => 24 * 60
        ]
    ];
}