<?php

use Hanafalah\ModuleMedicalItem\{
    Models as ModuleMedicalItem,
    Contracts
};

return [
    'contracts' => [
        'medical_item'        => Contracts\MedicalItem::class,
        'medicine'            => Contracts\Medicine::class,
        'medic_tool'          => Contracts\MedicTool::class,
        'module_medical_item' => Contracts\ModuleMedicalItem::class,
    ],
    'database' => [
        'models' => [
            'MedicalItem'         => ModuleMedicalItem\MedicalItem::class,
            'Medicine'            => ModuleMedicalItem\Medicine::class,
            'MedicTool'           => ModuleMedicalItem\MedicTool::class,
            'MedicalUnitReceived' => ModuleMedicalItem\MedicalUnitReceived::class
        ]
    ],
];
