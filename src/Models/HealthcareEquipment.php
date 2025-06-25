<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\ModuleItem\Models\InventoryItem;
use Hanafalah\ModuleMedicalItem\Resources\HealthcareEquipment\{
    ViewHealthcareEquipment,
    ShowHealthcareEquipment
};

class HealthcareEquipment extends InventoryItem
{
    protected $table = 'inventory_items';

    public function viewUsingRelation(): array{
        return [];
    }

    public function showUsingRelation(): array{
        return [];
    }

    public function getViewResource(){
        return ViewHealthcareEquipment::class;
    }

    public function getShowResource(){
        return ShowHealthcareEquipment::class;
    }
}
