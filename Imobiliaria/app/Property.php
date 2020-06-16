<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    
    protected $fillable= ['description', 'address', 'number', 'owner_id', 'rent_id'];

    
    public function owners()
    {
        return $this->belongsTo('App\Owner','owner_id');
    }
    
    public function rents()
    {
        return $this->belongsTo('App\Rent', 'rent_id');
    }
}
