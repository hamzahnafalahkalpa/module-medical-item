<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\ReagentData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\ReagentUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\Reagent
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateReagent(?ReagentData $reagent_dto = null)
 * @method Model prepareUpdateReagent(ReagentData $reagent_dto)
 * @method bool deleteReagent()
 * @method bool prepareDeleteReagent(? array $attributes = null)
 * @method mixed getReagent()
 * @method ?Model prepareShowReagent(?Model $model = null, ?array $attributes = null)
 * @method array showReagent(?Model $model = null)
 * @method Collection prepareViewReagentList()
 * @method array viewReagentList()
 * @method LengthAwarePaginator prepareViewReagentPaginate(PaginateData $paginate_dto)
 * @method array viewReagentPaginate(?PaginateData $paginate_dto = null)
 * @method array storeReagent(?ReagentData $reagent_dto = null)
 * @method Collection prepareStoreMultipleReagent(array $datas)
 * @method array storeMultipleReagent(array $datas)
 */

interface Reagent extends DataManagement
{
    public function prepareStoreReagent(ReagentData $reagent_dto): Model;
}