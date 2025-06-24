<?php

return [
    'namespace' => 'Hanafalah\ModuleMedicalItem',
    'app' => [
        'contracts' => [
        ],
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts',
        'schema' => 'Schemas',
        'database' => 'Database',
        'data' => 'Data',
        'resource' => 'Resources',
        'migration' => '../assets/database/migrations',
    ],
    'database' => [
        'models' => [
        ]
    ],
    'medical_item_types' => [
        'medicine' => [
            'schema' => 'Medicine',
        ],
        'medic_tool' => [
            'schema' => 'MedicTool'
        ],
        'reagent' => [
            'schema' => 'Reagent'
        ]
    ]
];
