<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Illuminate\Database\Eloquent\Model;
use Hanafalah\ModuleMedicalItem\{
    Supports\BaseModuleMedicalItem
};
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\Reagent as ContractsReagent;
use Hanafalah\ModuleMedicalItem\Contracts\Data\ReagentData;

class Reagent extends BaseModuleMedicalItem implements ContractsReagent
{
    protected string $__entity = 'Reagent';
    public $reagent_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'reagent',
            'tags'     => ['reagent', 'reagent-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStore(ReagentData $reagent_dto){
        $medic_tool = $this->prepareStoreReagent($reagent_dto);
        return $medic_tool;
    }

    public function prepareStoreReagent(ReagentData $reagent_dto): Model{
        $add = [
            'name' => $reagent_dto->name,
            'concentration' => $reagent_dto->concentration,
            'volume' => $reagent_dto->volume,
            'storage_condition' => $reagent_dto->storage_condition
        ];
        $guard  = ['id' => $reagent_dto->id];
        $create = [$guard, $add];

        $reagent = $this->usingEntity()->updateOrCreate(...$create);
        $this->fillingProps($reagent,$reagent_dto->props);
        $reagent->save();
        return $this->reagent_model = $reagent;
    }
}