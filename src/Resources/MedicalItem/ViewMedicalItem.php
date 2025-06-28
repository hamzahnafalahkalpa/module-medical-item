<?php

namespace Hanafalah\ModuleMedicalItem\Resources\MedicalItem;

use Illuminate\Http\Request;
use Hanafalah\LaravelSupport\Resources\ApiResource;
use Illuminate\Support\Str;

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
            'reference'             => $this->{'prop_'.Str::snake($this->reference_type)},
            'item'                  => $this->prop_item,
            'is_pom'                => $this->is_pom
        ];
        return $arr;
    }
}
