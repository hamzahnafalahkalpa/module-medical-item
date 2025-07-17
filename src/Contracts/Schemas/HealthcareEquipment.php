<?php

namespace Hanafalah\ModuleMedicalItem\Contracts\Schemas;

use Hanafalah\ModuleMedicalItem\Contracts\Data\HealthcareEquipmentData;
//use Hanafalah\ModuleMedicalItem\Contracts\Data\HealthcareEquipmentUpdateData;
use Hanafalah\ModuleItem\Contracts\Schemas\InventoryItem;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleMedicalItem\Schemas\HealthcareEquipment
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateHealthcareEquipment(?HealthcareEquipmentData $healthcare_equipment_dto = null)
 * @method Model prepareUpdateHealthcareEquipment(HealthcareEquipmentData $healthcare_equipment_dto)
 * @method bool deleteHealthcareEquipment()
 * @method bool prepareDeleteHealthcareEquipment(? array $attributes = null)
 * @method mixed getHealthcareEquipment()
 * @method ?Model prepareShowHealthcareEquipment(?Model $model = null, ?array $attributes = null)
 * @method array showHealthcareEquipment(?Model $model = null)
 * @method Collection prepareViewHealthcareEquipmentList()
 * @method array viewHealthcareEquipmentList()
 * @method LengthAwarePaginator prepareViewHealthcareEquipmentPaginate(PaginateData $paginate_dto)
 * @method array viewHealthcareEquipmentPaginate(?PaginateData $paginate_dto = null) 
 * @method array storeHealthcareEquipment(?HealthcareEquipmentData $healthcare_equipment_dto = null)
 * @method Collection prepareStoreMultipleHealthcareEquipment(array $datas)
 * @method array storeMultipleHealthcareEquipment(array $datas)
 */

interface HealthcareEquipment extends InventoryItem{}