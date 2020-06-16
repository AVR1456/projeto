<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    //
   protected $fillable = ['lease_value', 'lease_date', 'lease_expiration', 'renter_id'];

    public function selectRent(){
        $rentTypes = $this::all();
        $rentTypesList = $rentTypes->pluck('lease_value', 'id');

        return $rentTypesList;
    }

    public function renters(){

        return $this->belongsTo('App\Renter');
    }
}
