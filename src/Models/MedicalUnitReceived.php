<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Projects\Klinik\Models\Item\ItemStuff;

class MedicalUnitReceived extends ItemStuff
{
    protected $table = 'item_stuffs';

    public function getFlag(): array
    {
        return [
            'MEDICAL_MATERIAL_UNIT'
        ];
    }
}
