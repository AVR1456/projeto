<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealStateAgent extends Model
{
    //
    protected $fillable=['name', 'phone', 'email', 'real_state_id'];

     public function selectAgent(){
         $agentTypes = $this::all();
         $agentTypesList = $agentTypes->pluck('name','id');
         
         return $agentTypesList;
     }


    public function real_states(){
        return $this->belongsTo(RealState::class, 'real_state_id');
    }



    public function renters(){
        
        return $this->hasMany(Renter::class);
    }
}

