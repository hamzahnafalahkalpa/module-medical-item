<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicToolData;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\MedicTool as SchemasMedicTool;
use Hanafalah\ModuleMedicalItem\Supports\BaseModuleMedicalItem;
use Illuminate\Database\Eloquent\Model;

class MedicTool extends BaseModuleMedicalItem implements SchemasMedicTool
{
    protected string $__entity = 'MedicTool';
    public static $medic_tool_model;

    public function prepareStore(MedicToolData $medic_tool_dto): Model{
        $medic_tool = $this->prepareStoreMedicTool($medic_tool_dto);
        return $medic_tool;
    }

    public function prepareStoreMedicTool(MedicToolData $medic_tool_dto): Model{
        $medic_tool = $this->usingEntity()->updateOrCreate([
            'id'   => $medic_tool_dto->id ?? null
        ], [
            'name' => $medic_tool_dto->name,
        ]);
        $this->fillingProps($medic_tool,$medic_tool_dto->props);
        $medic_tool->save();
        return static::$medic_tool_model = $medic_tool;
    }
}
