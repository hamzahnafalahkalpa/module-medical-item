<?php

namespace Hanafalah\ModuleMedicalItem\Resources\MedicalItem;

use Hanafalah\ModuleMedicalItem\Resources\Medicine\ShowMedicine;
use Illuminate\Http\Request;

class ShowMedicalItem extends ViewMedicalItem
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(Request $request): array
    {
        $arr = [
            'reference' => $this->relationValidation('reference', function () {
                return $this->reference->toShowApi()->resolve();
            }),
            'item'      => $this->relationValidation('item', function () {
                return $this->item->toShowApi()->resolve();
            })
        ];
        $arr = $this->mergeArray(parent::toArray($request), $arr);
        return $arr;
    }
}
