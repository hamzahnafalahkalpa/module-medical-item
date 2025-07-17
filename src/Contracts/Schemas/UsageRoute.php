<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\UsageRouteData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\UsageRouteUpdateData;
use Hanafalah\ModuleItem\Contracts\Schemas\ItemStuff;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\UsageRoute
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateUsageRoute(?UsageRouteData $usage_route_dto = null)
 * @method Model prepareUpdateUsageRoute(UsageRouteData $usage_route_dto)
 * @method bool deleteUsageRoute()
 * @method bool prepareDeleteUsageRoute(? array $attributes = null)
 * @method mixed getUsageRoute()
 * @method ?Model prepareShowUsageRoute(?Model $model = null, ?array $attributes = null)
 * @method array showUsageRoute(?Model $model = null)
 * @method Collection prepareViewUsageRouteList()
 * @method array viewUsageRouteList()
 * @method LengthAwarePaginator prepareViewUsageRoutePaginate(PaginateData $paginate_dto)
 * @method array viewUsageRoutePaginate(?PaginateData $paginate_dto = null)
 * @method Model prepareStoreUsageRoute(UsageRouteData $usage_route_dto)
 * @method array storeUsageRoute(?UsageRouteData $usage_route_dto = null)
 * @method Collection prepareStoreMultipleUsageRoute(array $datas)
 * @method array storeMultipleUsageRoute(array $datas)
 */

interface UsageRoute extends ItemStuff{}