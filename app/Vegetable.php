<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    protected $table = 'vegetables';

    protected $fillable = [
        'name', 'description', 'weight', 'price', 'image',
    ];

}
