<?php

namespace Hanafalah\ModuleMedicalItem\Resources\Reagent;

use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewReagent extends ApiResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr = [
      'id' => $this->id,
      'name' => $this->name,
      'concentration' => $this->concentration,
      'volume' => $this->volume,
      'storage_condition' => $this->storage_condition
    ];
    return $arr;
  }
}
