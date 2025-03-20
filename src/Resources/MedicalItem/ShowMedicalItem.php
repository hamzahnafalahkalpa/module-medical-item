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
                return $this->reference->toShowApi();
            }),
            'item'      => $this->relationValidation('item', function () {
                return $this->item->toShowApi();
            })
        ];
        $arr = $this->mergeArray(parent::toArray($request), $arr);

        return $arr;
    }
}
