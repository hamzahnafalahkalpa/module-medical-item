<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicalCompositionUnitData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicalCompositionUnitUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\ModuleItem\Contracts\Schemas\ItemStuff;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\MedicalCompositionUnit
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateMedicalCompositionUnit(?MedicalCompositionUnitData $medical_composition_unit_dto = null)
 * @method Model prepareUpdateMedicalCompositionUnit(MedicalCompositionUnitData $medical_composition_unit_dto)
 * @method bool deleteMedicalCompositionUnit()
 * @method bool prepareDeleteMedicalCompositionUnit(? array $attributes = null)
 * @method mixed getMedicalCompositionUnit()
 * @method ?Model prepareShowMedicalCompositionUnit(?Model $model = null, ?array $attributes = null)
 * @method array showMedicalCompositionUnit(?Model $model = null)
 * @method Collection prepareViewMedicalCompositionUnitList()
 * @method array viewMedicalCompositionUnitList()
 * @method LengthAwarePaginator prepareViewMedicalCompositionUnitPaginate(PaginateData $paginate_dto)
 * @method array viewMedicalCompositionUnitPaginate(?PaginateData $paginate_dto = null)
 * @method Model prepareStoreMedicalCompositionUnit(MedicalCompositionUnitData $medical_composition_unit_dto)
 * @method array storeMedicalCompositionUnit(?MedicalCompositionUnitData $medical_composition_unit_dto = null)
 * @method Collection prepareStoreMultipleMedicalCompositionUnit(array $datas)
 * @method array storeMultipleMedicalCompositionUnit(array $datas)
 */

interface MedicalCompositionUnit extends ItemStuff{}