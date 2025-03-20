<?php

namespace Gii\ModuleMedicalItem\Resources\MedicTool;

use Illuminate\Http\Request;
use Zahzah\LaravelSupport\Resources\ApiResource;

class ViewMedicTool extends ApiResource
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
            'status'  => $this->status
        ];
        $props = $this->getPropsData();
        foreach ($props as $key => $prop) {
            $arr[$key] = $prop;
        }
        
        return $arr;
    }
}
