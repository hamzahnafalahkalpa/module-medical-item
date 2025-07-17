<?php

use Hanafalah\ModuleMedicalItem\Controllers\API\HealthcareEquipment\HealthcareEquipmentController;
use Illuminate\Support\Facades\Route;

Route::apiResource('healthcare-equipment', HealthcareEquipmentController::class)
    ->parameters(['healthcare-equipment' => 'id']);