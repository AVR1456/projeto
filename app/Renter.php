<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    //
    protected $fillable= ['name', 'cpf', 'birdh_date', 'phone', 'email', 'realstategent_id'];

    

    public function selectRenter(){
        $renterTypes = $this::all();
        $renterTypesList = $renterTypes->pluck('name', 'id');

        return $renterTypesList;
    }

    public function real_state_agents(){
        
        return $this->belongsTo(RealStateAgent::class, 'realstateagent_id');
    }

    public function rent(){
        return $this->hasOne(Rent::class);
    }
}
