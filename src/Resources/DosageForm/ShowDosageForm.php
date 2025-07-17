<?php

namespace Hanafalah\ModuleMedicalItem\Resources\DosageForm;

use Hanafalah\ModuleItem\Resources\ItemStuff\ShowItemStuff;

class ShowDosageForm extends ViewDosageForm
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
