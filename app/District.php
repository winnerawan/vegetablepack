<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id');
    }

    public function village()
    {
        return $this->hasMany(Village::class, 'district_id');
    }
}
