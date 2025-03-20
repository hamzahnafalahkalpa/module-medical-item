<?php

namespace Hanafalah\ModuleMedicalItem\Concerns;

trait HasMedicalItem
{
    public static function bootHasMedicalItem()
    {
        static::created(function ($query) {
            $query->medicalItem()->firstOrCreate([
                'name' => $query->name
            ]);
        });
    }

    public function medicalItem()
    {
        return $this->morphOneModel('MedicalItem', 'reference');
    }
}
