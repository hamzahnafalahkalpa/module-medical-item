<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\ModuleItem\Data\ItemStuffData;
use Hanafalah\ModuleMedicalItem\Contracts\Data\TrademarkData as DataTrademarkData;

class TrademarkData extends ItemStuffData implements DataTrademarkData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'Trademark';
        parent::before($attributes);
    }
}