<?php

namespace Hanafalah\ModuleMedicalItem\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicToolData;
use Hanafalah\ModuleMedicalItem\Contracts\Schemas\MedicTool as SchemasMedicTool;
use Illuminate\Database\Eloquent\Model;

class MedicTool extends MedicalItem implements SchemasMedicTool
{
    protected string $__entity = 'MedicTool';
    public static $medic_tool_model;

    public function prepareStore(MedicToolData $medicine_dto){
        $medicine = $this->prepareStoreMedicine($medicine_dto);
        return $medicine;
    }

    public function prepareStoreMedicTool(MedicToolData $medic_tool_dto): Model
    {
        $medic_tool = $this->usingEntity()->updateOrCreate([
            'id'   => $medic_tool_dto->id ?? null
        ], [
            'name' => $medic_tool_dto->name,
        ]);
        $this->fillingProps($medic_tool,$medic_tool_dto->props);
        $medic_tool->save();
        static::$medic_tool_model = $medic_tool;
        return $medic_tool;
    }
}
