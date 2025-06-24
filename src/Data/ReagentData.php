<?php

namespace Hanafalah\ModuleMedicalItem\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleMedicalItem\Contracts\Data\ReagentData as DataReagentData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class ReagentData extends Data implements DataReagentData
{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('name')]
    #[MapName('name')]
    public string $name;

    #[MapInputName('concentration')]
    #[MapName('concentration')]
    public ?string $concentration = null;

    #[MapInputName('volume')]
    #[MapName('volume')]
    public ?float $volume = null;

    #[MapInputName('storage_condition')]
    #[MapName('storage_condition')]
    public ?string $storage_condition = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;

    public static function after(self $data): self{
        $new = static::new();
        $props = &$data->props;
        return $data;
    }
}