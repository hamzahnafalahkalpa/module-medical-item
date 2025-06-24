<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\MixUnitData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\MixUnitUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\ModuleItem\Contracts\Schemas\ItemStuff;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\MixUnit
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateMixUnit(?MixUnitData $mix_unit_dto = null)
 * @method Model prepareUpdateMixUnit(MixUnitData $mix_unit_dto)
 * @method bool deleteMixUnit()
 * @method bool prepareDeleteMixUnit(? array $attributes = null)
 * @method mixed getMixUnit()
 * @method ?Model prepareShowMixUnit(?Model $model = null, ?array $attributes = null)
 * @method array showMixUnit(?Model $model = null)
 * @method Collection prepareViewMixUnitList()
 * @method array viewMixUnitList()
 * @method LengthAwarePaginator prepareViewMixUnitPaginate(PaginateData $paginate_dto)
 * @method array viewMixUnitPaginate(?PaginateData $paginate_dto = null)
 * @method Model prepareStoreMixUnit(MixUnitData $mix_unit_dto)
 * @method array storeMixUnit(?MixUnitData $mix_unit_dto = null)
 * @method Collection prepareStoreMultipleMixUnit(array $datas)
 * @method array storeMultipleMixUnit(array $datas)
 */

interface MixUnit extends ItemStuff{}