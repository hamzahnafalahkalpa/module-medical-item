<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleMedicalItem\Contracts\Data\MedicToolData as DataMedicToolData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class MedicToolData extends Data implements DataMedicToolData{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('name')]
    #[MapName('name')]
    public ?string $name = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;

    public static function after(self $data): self{
        $new = static::new();
        $props = &$data->props;
        return $data;
    }
}