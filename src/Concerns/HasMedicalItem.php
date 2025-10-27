<?php

namespace Hanafalah\ModuleMedicalItem\Concerns;

trait HasMedicalItem
{
    public static function bootHasMedicalItem()
    {
        static::created(function ($query) {
            if ($query->isUsingMedicalItem()){
                $query->medicalItem()->firstOrCreate([
                    'name' => $query->name
                ]);
            }
        });
    }
    
    protected function isUsingMedicalItem(): bool{
        $configs = config('module-medical-item.is_using_medical_items',[]);
        return in_array($this->getMorphClass(), $configs);
    }

    public function medicalItem()
    {
        return $this->morphOneModel('MedicalItem', 'reference');
    }
}
