<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicineData;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\Medicine
 * @method self setParamLogic(string $logic, bool $search_value = false, ?array $optionals = [])
 * @method self conditionals(mixed $conditionals)
 * @method mixed export(string $type)
 * @method bool deleteMedicine()
 * @method bool prepareDeleteMedicine(? array $attributes = null)
 * @method mixed getMedicine()
 * @method ?Model prepareShowMedicine(?Model $model = null, ?array $attributes = null)
 * @method array showMedicine(?Model $model = null)
 * @method Collection prepareViewMedicineList()
 * @method array viewMedicineList()
 * @method LengthAwarePaginator prepareViewMedicinePaginate(PaginateData $paginate_dto)
 * @method array viewMedicinePaginate(?PaginateData $paginate_dto = null)
 * @method array storeMedicine(?MedicineData $medicine_dto = null)
 * @method Builder medicine(mixed $conditionals = null)
 */
interface Medicine extends DataManagement
{
    public function prepareStoreMedicine(MedicineData $medicine_dto): Model;
}
