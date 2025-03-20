<?php

namespace Hanafalah\ModuleMedicalItem\Resources\Medicine;

use Illuminate\Http\Request;
use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewMedicine extends ApiResource
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
            'id'      => $this->id,
            'name'    => $this->name,
            'dosage_form' => $this->relationValidation('dosageForm', function () {
                return $this->dosageForm->toViewApi();
            }),
            'selling_category' => $this->relationValidation('sellingCategory', function () {
                return $this->sellingCategory->toViewApi();
            }),
            'status'  => $this->status
        ];
        $props = $this->getPropsData();
        foreach ($props as $key => $prop) {
            $arr[$key] = $prop;
        }

        return $arr;
    }
}
