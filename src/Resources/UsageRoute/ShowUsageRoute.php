<?php

namespace Hanafalah\ModuleMedicalItem\Resources\UsageRoute;

use Hanafalah\ModuleItem\Resources\ItemStuff\ShowItemStuff;

class ShowUsageRoute extends ViewUsageRoute
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
    $arr = $this->mergeArray(parent::toArray($request),$arr);
    return $arr;
  }
}
