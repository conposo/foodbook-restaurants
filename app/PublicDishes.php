<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicDishes extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'restaurant_id',
        'dish_id',
    ];

}
