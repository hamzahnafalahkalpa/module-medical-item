<?php

namespace Hanafalah\ModuleMedicalItem\Resources\UsageLocation;

use Hanafalah\ModuleItem\Resources\ItemStuff\ShowItemStuff;

class ShowUsageLocation extends ViewUsageLocation
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
    $show = $this->resolveNow(new ShowItemStuff($this));
    $arr = $this->mergeArray(parent::toArray($request),$show,$arr);
    return $arr;
  }
}
