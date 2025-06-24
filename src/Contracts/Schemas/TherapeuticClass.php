<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\TherapeuticClassData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\TherapeuticClassUpdateData;
use Hanafalah\ModuleItem\Contracts\Schemas\ItemStuff;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\TherapeuticClass
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateTherapeuticClass(?TherapeuticClassData $therapeutic_class_dto = null)
 * @method Model prepareUpdateTherapeuticClass(TherapeuticClassData $therapeutic_class_dto)
 * @method bool deleteTherapeuticClass()
 * @method bool prepareDeleteTherapeuticClass(? array $attributes = null)
 * @method mixed getTherapeuticClass()
 * @method ?Model prepareShowTherapeuticClass(?Model $model = null, ?array $attributes = null)
 * @method array showTherapeuticClass(?Model $model = null)
 * @method Collection prepareViewTherapeuticClassList()
 * @method array viewTherapeuticClassList()
 * @method LengthAwarePaginator prepareViewTherapeuticClassPaginate(PaginateData $paginate_dto)
 * @method array viewTherapeuticClassPaginate(?PaginateData $paginate_dto = null)
 * @method Model prepareStoreTherapeuticClass(TherapeuticClassData $therapeutic_class_dto)
 * @method array storeTherapeuticClass(?TherapeuticClassData $therapeutic_class_dto = null)
 * @method Collection prepareStoreMultipleTherapeuticClass(array $datas)
 * @method array storeMultipleTherapeuticClass(array $datas)
 */

interface TherapeuticClass extends ItemStuff{}