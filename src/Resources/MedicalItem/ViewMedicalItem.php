<?php

namespace Gii\ModuleMedicalItem\Resources\MedicalItem;

use Illuminate\Http\Request;
use Zahzah\LaravelSupport\Resources\ApiResource;

class ViewMedicalItem extends ApiResource
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
            'id'                    => $this->id,
            'registration_no'       => $this->registration_no,
            'reference_type'        => $this->reference_type,
            'reference'             => $this->relationValidation('reference',function(){
                return $this->reference->toViewApi();
            }),
            'item'                  => $this->relationValidation('item',function(){
                return $this->item->toViewApi();
            }),
            'is_pom'                => $this->is_pom,
            'status'                => $this->status,
        ];
        $props = $this->getPropsData();
        foreach ($props as $key => $prop) {
            $arr[$key] = $prop;
        }
        
        return $arr;
    }
}
