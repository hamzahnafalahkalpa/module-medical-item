<?php

namespace Hanafalah\ModuleMedicalItem\Controllers\API\HealthcareEquipment;

use Hanafalah\ModuleMedicalItem\Contracts\Schemas\HealthcareEquipment;
use Hanafalah\ModuleMedicalItem\Controllers\API\ApiController;
use Hanafalah\ModuleMedicalItem\Requests\API\HealthcareEquipment\{
    ViewRequest, StoreRequest, DeleteRequest
};

class HealthcareEquipmentController extends ApiController{
    public function __construct(
        protected HealthcareEquipment $__healthcareequipment_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__healthcareequipment_schema->viewHealthcareEquipmentList();
    }

    public function store(StoreRequest $request){
        return $this->__healthcareequipment_schema->storeHealthcareEquipment();
    }

    public function destroy(DeleteRequest $request){
        return $this->__healthcareequipment_schema->deleteHealthcareEquipment();
    }
}