<?php

return [
    'namespace' => 'Hanafalah\ModuleMedicalItem',
    'app' => [
        'contracts' => [
        ],
    ],
    'libs' => [
        'provider' => 'Providers',
        'concern' => 'Concerns',
        'command' => 'Commands',
        'route' => 'Routes',
        'seeder' => 'Database/Seeders',
        'support' => 'Supports',
        'view' => 'Views',
        'facade' => 'Facades',
        'config' => 'assets/config',
        'import' => 'Imports',
        'data' => 'Data',
        'resource' => 'Resources',
        'model' => 'Models',
        'contract' => 'Contracts',
        'schema' => 'Schemas',
        'database' => 'Database',
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
    ],
    'packages' => [
        'module-item' => [
            'config' => [
                'inventory_types' => [
                    'healthcare_equipment' => [
                        'schema' => 'HealthcareEquipment'
                    ]
                ]
            ]
        ]
    ]
];
