<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    public function store()
    {
        return $this->hasMany(Store::class, 'village_id');
    }

    public function customer()
    {
        return $this->hasMany(Customer::class, 'village_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }


}
