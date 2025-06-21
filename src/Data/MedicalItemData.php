<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicalItemData as DataMedicalItemData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Illuminate\Support\Str;

class MedicalItemData extends Data implements DataMedicalItemData{
    use HasRequestData;

    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('name')]
    #[MapName('name')]
    public ?string $name = null;

    #[MapInputName('medical_item_code')]
    #[MapName('medical_item_code')]
    public ?string $medical_item_code = null;

    #[MapInputName('registration_no')]
    #[MapName('registration_no')]
    public ?string $registration_no = null;

    #[MapInputName('reference_type')]
    #[MapName('reference_type')]
    public ?string $reference_type = null;

    #[MapInputName('reference_id')]
    #[MapName('reference_id')]
    public mixed $reference_id = null;

    #[MapInputName('reference')]
    #[MapName('reference')]
    public array|object $reference;

    #[MapInputName('is_pom')]
    #[MapName('is_pom')]
    public ?bool $is_pom = false;

    #[MapInputName('status')]
    #[MapName('status')]
    public ?string $status = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;

    public static function before(array &$attributes){
        $new = static::new();
        if (isset($attributes['id'])){
            $medical_item_model   = $new->MedicalItemModel()->with('reference')->findOrFail($attributes['id']);
            $attributes['reference_id']   = $reference['id'] = $medical_item_model->reference_id;
            $attributes['reference_type'] = $medical_item_model->reference_type;
        }else{
            $config_keys = array_keys(config('module-medical-item.medical_item_types'));
            $keys        = array_intersect(array_keys(request()->all()),$config_keys);
            $key         = array_shift($keys);
            $attributes['reference_type'] ??= request()->reference_type ?? $key;
            $attributes['reference_type'] = Str::studly($attributes['reference_type']);
        }
    }

    public static function after(self $data): self{
        $new = static::new();
        $reference = &$data->reference;
        $reference = self::transformToData($data->reference_type, $reference);
        $data->name = $reference->name;
        return $data;
    }

    private static function transformToData(string $entity,array $attributes){
        $new = static::new();
        return $new->requestDTO(config('app.contracts.'.$entity.'Data'),$attributes);
    }
}