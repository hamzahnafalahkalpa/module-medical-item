<?php

namespace Hanafalah\ModuleMedicalItem\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface MedicTool extends MedicalItem
{
    public function prepareStoreMedicTool(?array $attributes = null): Model;
    public function medicTool(mixed $conditionals = null): Builder;
}
