<?php

namespace Hanafalah\ModuleMedicalItem\Resources\HealthcareEquipment;

use Hanafalah\ModuleItem\Resources\InventoryItem\ViewInventoryItem;

class ViewHealthcareEquipment extends ViewInventoryItem
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
    $arr = $this->mergeArray(parent::toArray($request), $arr);
    return $arr;
  }
}

