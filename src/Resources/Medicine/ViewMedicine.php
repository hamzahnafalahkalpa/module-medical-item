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
            'id'                => $this->id,
            'name'              => $this->name,
            'dosage_form'       => $this->prop_dosage_form,
            'usage_location'    => $this->prop_usage_location,
            'usage_route'       => $this->prop_usage_route,
            'therapeutic_class' => $this->prop_therapeutic_class,
            'package_form'      => $this->prop_package_form,
            'status'            => $this->status
        ];
        return $arr;
    }
}
