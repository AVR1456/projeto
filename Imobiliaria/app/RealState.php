<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealState extends Model
{
    

    protected $fillable= ['name', 'cnpj', 'address', 'phone', 'email'];


    public function selectRealState(){
        $realstateTypes = $this::all();
        $realstateTypesList = $realstateTypes->pluck('name', 'id');

        return $realstateTypesList;

    }

    public function real_state_agents(){
        
        return $this->hasMany(RealStateAgent::class);
    }

    
    public function owners(){
        
        return $this->hasMany(Owner::class);
    }
}
