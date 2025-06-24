<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicineData as DataMedicineData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class MedicineData extends Data implements DataMedicineData{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('name')]
    #[MapName('name')]
    public ?string $name = null;

    #[MapInputName('acronym')]
    #[MapName('acronym')]
    public ?string $acronym = null;

    #[MapInputName('is_lasa')]
    #[MapName('is_lasa')]
    public ?bool $is_lasa = false;

    #[MapInputName('is_antibiotic')]
    #[MapName('is_antibiotic')]
    public ?bool $is_antibiotic = false;

    #[MapInputName('is_high_alert')]
    #[MapName('is_high_alert')]
    public ?bool $is_high_alert = false;

    #[MapInputName('is_narcotic')]
    #[MapName('is_narcotic')]
    public ?bool $is_narcotic = false;

    #[MapInputName('usage_location_id')]
    #[MapName('usage_location_id')]
    public mixed $usage_location_id = null;

    #[MapInputName('usage_route_id')]
    #[MapName('usage_route_id')]
    public mixed $usage_route_id = null;

    #[MapInputName('therapeutic_class_id')]
    #[MapName('therapeutic_class_id')]
    public mixed $therapeutic_class_id = null;

    #[MapInputName('dosage_form_id')]
    #[MapName('dosage_form_id')]
    public mixed $dosage_form_id = null;

    #[MapInputName('selling_form_id')]
    #[MapName('selling_form_id')]
    public mixed $selling_form_id = null;

    #[MapInputName('package_form_id')]
    #[MapName('package_form_id')]
    public mixed $package_form_id = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;

    public static function after(self $data): self{
        $new = static::new();
        $props = &$data->props;

        $usage_location = $new->UsageLocationModel();
        $usage_location = (isset($data->usage_location_id)) ? $usage_location->findOrFail($data->usage_location_id) : $usage_location;
        $props['prop_usage_location'] = $usage_location->toViewApi()->only(['id','name']);

        $usage_route = $new->UsageRouteModel();
        $usage_route = (isset($data->usage_route_id)) ? $usage_route->findOrFail($data->usage_route_id) : $usage_route;
        $props['prop_usage_route'] = $usage_route->toViewApi()->only(['id','name']);

        $therapeutic_class = $new->TherapeuticClassModel();
        $therapeutic_class = (isset($data->therapeutic_class_id)) ? $therapeutic_class->findOrFail($data->therapeutic_class_id) : $therapeutic_class;
        $props['prop_therapeutic_class'] = $therapeutic_class->toViewApi()->only(['id','name']);

        $dosage_form = $new->DosageFormModel();
        $dosage_form = (isset($data->dosage_form_id)) ? $dosage_form->findOrFail($data->dosage_form_id) : $dosage_form;
        $props['prop_dosage_form'] = $dosage_form->toViewApi()->only(['id','name']);

        $selling_form = $new->SellingFormModel();
        $selling_form = (isset($data->selling_form_id)) ? $selling_form->findOrFail($data->selling_form_id) : $selling_form;
        $props['prop_selling_form'] = $selling_form->toViewApi()->only(['id','name']);

        $package_form = $new->PackageFormModel();
        $package_form = (isset($data->package_form_id)) ? $package_form->findOrFail($data->package_form_id) : $package_form;
        $props['prop_package_form'] = $package_form->toViewApi()->only(['id','name']);
        return $data;
    }
}