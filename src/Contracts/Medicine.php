<?php

namespace Gii\ModuleMedicalItem\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface Medicine extends MedicalItem {
    public function prepareStoreMedicine(? array $attributes = null): Model;
    public function medicine(mixed $conditionals=null): Builder;
}
