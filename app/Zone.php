<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{

    public function store()
    {
        return $this->hasMany(Store::class, 'zone_id');
    }

    public function district()
    {
        return $this->hasMany(District::class, 'zone_id');
    }
}
