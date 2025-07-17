<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\FreqUnitData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\FreqUnitUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\ModuleItem\Contracts\Schemas\ItemStuff;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\FreqUnit
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateFreqUnit(?FreqUnitData $freq_unit_dto = null)
 * @method Model prepareUpdateFreqUnit(FreqUnitData $freq_unit_dto)
 * @method bool deleteFreqUnit()
 * @method bool prepareDeleteFreqUnit(? array $attributes = null)
 * @method mixed getFreqUnit()
 * @method ?Model prepareShowFreqUnit(?Model $model = null, ?array $attributes = null)
 * @method array showFreqUnit(?Model $model = null)
 * @method Collection prepareViewFreqUnitList()
 * @method array viewFreqUnitList()
 * @method LengthAwarePaginator prepareViewFreqUnitPaginate(PaginateData $paginate_dto)
 * @method array viewFreqUnitPaginate(?PaginateData $paginate_dto = null)
 * @method Model prepareStoreFreqUnit(FreqUnitData $freq_unit_dto)
 * @method array storeFreqUnit(?FreqUnitData $freq_unit_dto = null)
 * @method Collection prepareStoreMultipleFreqUnit(array $datas)
 * @method array storeMultipleFreqUnit(array $datas)
 */

interface FreqUnit extends ItemStuff{}