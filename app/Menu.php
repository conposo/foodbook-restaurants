<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_public',
        'restaurant_id',
        'category_slug',
        'dish_id',
        'dish_name',
        'dish_slug',
        'dish_price',
        'dish_weight',
        'dish_image_url',
        'order',
    ];

}
