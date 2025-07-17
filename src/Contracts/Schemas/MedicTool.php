<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicToolData;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\MedicTool
 * @method self setParamLogic(string $logic, bool $search_value = false, ?array $optionals = [])
 * @method self conditionals(mixed $conditionals)
 * @method mixed export(string $type)
 * @method bool deleteMedicTool()
 * @method bool prepareDeleteMedicTool(? array $attributes = null)
 * @method mixed getMedicTool()
 * @method ?Model prepareShowMedicTool(?Model $model = null, ?array $attributes = null)
 * @method array showMedicTool(?Model $model = null)
 * @method Collection prepareViewMedicToolList()
 * @method array viewMedicToolList()
 * @method LengthAwarePaginator prepareViewMedicToolPaginate(PaginateData $paginate_dto)
 * @method array viewMedicToolPaginate(?PaginateData $paginate_dto = null)
 * @method array storeMedicTool(?MedicToolData $medic_tool_dto = null)
 */
interface MedicTool extends DataManagement
{
    public function prepareStoreMedicTool(MedicToolData $medic_tool_dto): Model;
}
