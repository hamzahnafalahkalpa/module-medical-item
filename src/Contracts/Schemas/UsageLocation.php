<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\UsageLocationData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\UsageLocationUpdateData;
use Hanafalah\ModuleItem\Contracts\Schemas\ItemStuff;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\UsageLocation
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateUsageLocation(?UsageLocationData $usage_location_dto = null)
 * @method Model prepareUpdateUsageLocation(UsageLocationData $usage_location_dto)
 * @method bool deleteUsageLocation()
 * @method bool prepareDeleteUsageLocation(? array $attributes = null)
 * @method mixed getUsageLocation()
 * @method ?Model prepareShowUsageLocation(?Model $model = null, ?array $attributes = null)
 * @method array showUsageLocation(?Model $model = null)
 * @method Collection prepareViewUsageLocationList()
 * @method array viewUsageLocationList()
 * @method LengthAwarePaginator prepareViewUsageLocationPaginate(PaginateData $paginate_dto)
 * @method array viewUsageLocationPaginate(?PaginateData $paginate_dto = null)
 * @method Model prepareStoreUsageLocation(UsageLocationData $usage_location_dto)
 * @method array storeUsageLocation(?UsageLocationData $usage_location_dto = null)
 * @method Collection prepareStoreMultipleUsageLocation(array $datas)
 * @method array storeMultipleUsageLocation(array $datas)
 */

interface UsageLocation extends ItemStuff{}