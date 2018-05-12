<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    public function merchant()
    {
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id');
    }

    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }
}
