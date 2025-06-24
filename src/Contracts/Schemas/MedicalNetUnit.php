<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicalNetUnitData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicalNetUnitUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\ModuleItem\Contracts\Schemas\ItemStuff;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\MedicalNetUnit
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateMedicalNetUnit(?MedicalNetUnitData $medical_net_unit_dto = null)
 * @method Model prepareUpdateMedicalNetUnit(MedicalNetUnitData $medical_net_unit_dto)
 * @method bool deleteMedicalNetUnit()
 * @method bool prepareDeleteMedicalNetUnit(? array $attributes = null)
 * @method mixed getMedicalNetUnit()
 * @method ?Model prepareShowMedicalNetUnit(?Model $model = null, ?array $attributes = null)
 * @method array showMedicalNetUnit(?Model $model = null)
 * @method Collection prepareViewMedicalNetUnitList()
 * @method array viewMedicalNetUnitList()
 * @method LengthAwarePaginator prepareViewMedicalNetUnitPaginate(PaginateData $paginate_dto)
 * @method array viewMedicalNetUnitPaginate(?PaginateData $paginate_dto = null)
 * @method Model prepareStoreMedicalNetUnit(MedicalNetUnitData $medical_net_unit_dto)
 * @method array storeMedicalNetUnit(?MedicalNetUnitData $medical_net_unit_dto = null)
 * @method Collection prepareStoreMultipleMedicalNetUnit(array $datas)
 * @method array storeMultipleMedicalNetUnit(array $datas)
 */

interface MedicalNetUnit extends ItemStuff{}