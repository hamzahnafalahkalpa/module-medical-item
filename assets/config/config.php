<?php

use Hanafalah\ModuleMedicalItem\{
    Models as ModuleMedicalItem,
    Contracts,
    Commands
};

return [
    'namespace' => 'Hanafalah\\ModuleMedicalItem',
    'app' => [
        'contracts' => [
            //ADD YOUR CONTRACTS HERE
        ]
    ],
    'libs' => [
        'model' => 'Models',
        'config' => 'assets/config',
        'contract' => 'Contracts',
        'schema' => 'Schemas',
        'database' => 'Database',
        'data' => 'Data',
        'resource' => 'Resources',
        'migration' => '../assets/database/migrations'
    ],
    'database' => [
        'models' => [
        ]
    ],
    'commands' => [
        Commands\InstallMakeCommand::class
    ]
];
