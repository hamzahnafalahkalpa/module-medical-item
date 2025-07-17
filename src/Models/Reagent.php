<?php

namespace Hanafalah\ModuleMedicalItem\Models;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\ModuleMedicalItem\Resources\Reagent\{
    ViewReagent,
    ShowReagent
};
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Reagent extends BaseModel
{
    use HasUlids, HasProps, SoftDeletes;
    
    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    public $list = [
        'id',
        'name',
        'concentration',
        'volume',
        'storage_condition',
        'props',
    ];

    protected $casts = [
        'name' => 'string',
        'concentration' => 'string',
        'volume' => 'float',
        'storage_condition' => 'string'
    ];

    public function viewUsingRelation(): array{
        return [];
    }

    public function showUsingRelation(): array{
        return [];
    }

    public function getViewResource(){
        return ViewReagent::class;
    }

    public function getShowResource(){
        return ShowReagent::class;
    }

    

    
}
