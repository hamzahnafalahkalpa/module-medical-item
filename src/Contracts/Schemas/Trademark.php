<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\TrademarkData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\TrademarkUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\ModuleItem\Contracts\Schemas\ItemStuff;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\Trademark
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateTrademark(?TrademarkData $trademark_dto = null)
 * @method Model prepareUpdateTrademark(TrademarkData $trademark_dto)
 * @method bool deleteTrademark()
 * @method bool prepareDeleteTrademark(? array $attributes = null)
 * @method mixed getTrademark()
 * @method ?Model prepareShowTrademark(?Model $model = null, ?array $attributes = null)
 * @method array showTrademark(?Model $model = null)
 * @method Collection prepareViewTrademarkList()
 * @method array viewTrademarkList()
 * @method LengthAwarePaginator prepareViewTrademarkPaginate(PaginateData $paginate_dto)
 * @method array viewTrademarkPaginate(?PaginateData $paginate_dto = null)
 * @method Model prepareStoreTrademark(TrademarkData $trademark_dto)
 * @method array storeTrademark(?TrademarkData $trademark_dto = null)
 * @method Collection prepareStoreMultipleTrademark(array $datas)
 * @method array storeMultipleTrademark(array $datas)
 */

interface Trademark extends ItemStuff{}