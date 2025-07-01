<?php

namespace Hanafalah\ModuleMedicalItem\Resources\Medicine;

use Hanafalah\ModuleItem\Resources\ItemStuff\ViewItemStuff;
use Illuminate\Http\Request;

class ShowMedicine extends ViewMedicine
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
            'acronym'           => $this->acronym,
            'is_lasa'           => $this->is_lasa == 1 ? true : false,
            'is_antibiotic'     => $this->is_antibiotic == 1 ? true : false,
            'is_high_alert'     => $this->is_high_alert == 1 ? true : false,
            'is_narcotic'       => $this->is_narcotic == 1 ? true : false,
            // 'usage_location'    => $this->relationValidation('usageLocation', function () {
            //     return $this->usageLocation->toViewApi()->resolve();
            // }),
            // 'usage_route'       => $this->relationValidation('usageRoute', function () {
            //     return $this->usageRoute->toViewApi()->resolve();
            // }),
            // 'therapeutic_class' => $this->relationValidation('therapeuticClass', function () {
            //     return new ViewItemStuff($this->therapeuticClass);
            //     return $this->therapeuticClass->toViewApi()->resolve();
            // }),
            // 'dosage_form' => $this->relationValidation('dosageForm', function () {
            //     return $this->dosageForm->toViewApi()->resolve();
            // }),
            // 'package_form' => $this->relationValidation('packageForm', function () {
            //     return $this->packageForm->toViewApi()->resolve();
            // })
        ];
        $arr = $this->mergeArray(parent::toArray($request), $arr);

        return $arr;
    }
}
