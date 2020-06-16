<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //

    protected $fillable= ['name', 'cpf', 'address', 'phone', 'realstate_id'];
    protected $guarded=['id'];


    public function selectOwner(){
        $ownerType = $this::all();
        $ownerTypeList = $ownerType->pluck('name', 'id');

        return $ownerTypeList;
    }

    public function properties(){
        
        return $this->hasMany('App\Property', 'owner_id');
    }

    public function real_states(){
        return $this->belongsTo('App\RealState', 'realstate_id');
    }    
}
