<?php

namespace Hanafalah\ModuleMedicalItem\Controllers\API\Reagent;

use Hanafalah\ModuleMedicalItem\Contracts\Schemas\Reagent;
use Hanafalah\ModuleMedicalItem\Controllers\API\ApiController;
use Hanafalah\ModuleMedicalItem\Requests\API\Reagent\{
    ViewRequest, StoreRequest, DeleteRequest
};

class ReagentController extends ApiController{
    public function __construct(
        protected Reagent $__reagent_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__reagent_schema->viewReagentList();
    }

    public function store(StoreRequest $request){
        return $this->__reagent_schema->storeReagent();
    }

    public function destroy(DeleteRequest $request){
        return $this->__reagent_schema->deleteReagent();
    }
}