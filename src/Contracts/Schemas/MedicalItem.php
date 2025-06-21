<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\LaravelSupport\Contracts\Data\PaginateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicalItemData;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\MedicalItem
 * @method self setParamLogic(string $logic, bool $search_value = false, ?array $optionals = [])
 * @method self conditionals(mixed $conditionals)
 * @method mixed export(string $type)
 * @method bool deleteMedicalItem()
 * @method bool prepareDeleteMedicalItem(? array $attributes = null)
 * @method mixed getMedicalItem()
 * @method ?Model prepareShowMedicalItem(?Model $model = null, ?array $attributes = null)
 * @method array showMedicalItem(?Model $model = null)
 * @method Collection prepareViewMedicalItemList()
 * @method array viewMedicalItemList()
 * @method LengthAwarePaginator prepareViewMedicalItemPaginate(PaginateData $paginate_dto)
 * @method array viewMedicalItemPaginate(?PaginateData $paginate_dto = null)
 * @method array storeMedicalItem(?MedicalItemData $medical_item_dto = null)
 */
interface MedicalItem extends DataManagement
{
    public function prepareStoreMedicalItem(MedicalItemData $medical_item_dto): Model;
    public function medicalItem(mixed $conditionals = null): Builder;
}
