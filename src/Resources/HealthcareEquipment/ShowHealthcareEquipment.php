<?php

namespace Hanafalah\ModuleMedicalItem\Resources\HealthcareEquipment;

use Hanafalah\ModuleItem\Resources\InventoryItem\ShowInventoryItem;

class ShowHealthcareEquipment extends ViewHealthcareEquipment
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr = [];
    $show = $this->resolveNow(new ShowInventoryItem($this));
    $arr = $this->mergeArray(parent::toArray($request),$show,$arr);
    return $arr;
  }
}
