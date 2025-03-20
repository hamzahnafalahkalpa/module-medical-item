<?php

namespace Gii\ModuleMedicalItem\Schemas;

use Gii\ModuleMedicalItem\Contracts;
use Gii\ModuleMedicalItem\Resources\MedicTool\{
    ShowMedicTool, ViewMedicTool 
};
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class MedicTool extends MedicalItem implements Contracts\MedicTool {
    protected array $__guard   = ['id'];
    protected array $__add     = ['name','status'];
    protected string $__entity = 'MedicTool';
    public static $medictool_model;

    protected array $__resources = [
        'view' => ViewMedicTool::class,
        'show' => ShowMedicTool::class
    ];

    

    public function prepareStoreMedicTool(? array $attributes = null): Model{
        $attributes ??= request()->all();

        $medicTool = $this->medicTool()->updateOrCreate([
            'id'   => $attributes['id'] ?? null
        ],[
            'name' => $attributes['name'],
        ]);

        static::$medictool_model = $medicTool;
        return $medicTool;
    }

    public function medicTool(mixed $conditionals=null): Builder{
        $this->booting();
        return $this->MedicToolModel()->withParameters()->conditionals($conditionals);
    }
}
