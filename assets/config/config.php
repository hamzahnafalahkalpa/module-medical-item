<?php

use Hanafalah\ModuleMedicalItem\{
    Models as ModuleMedicalItem,
    Contracts
};

return [
    'app' => [
        'contracts' => [
            //ADD YOUR CONTRACTS HERE
            'medical_item'        => Contracts\MedicalItem::class,
            'medicine'            => Contracts\Medicine::class,
            'medic_tool'          => Contracts\MedicTool::class,
            'module_medical_item' => Contracts\ModuleMedicalItem::class,
        ],
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts'
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
