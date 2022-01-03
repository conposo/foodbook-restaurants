<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'creator_id',
        'slug',
        'business_name',
        'worktime',
        'city',
        'region',
        'postal_code',
        'address',
        'address_additional',
        'lat',
        'lng',
        'phone',
        'email',
        'website',
        'fb_page',
        'description',
        'category',
        'cuisine',
        'seats',
        'price_range',
        'agreement',
    ];

    /**
     * Get Menu Regions
     */
    public function regions()
    {
        return $this->hasMany('App\Regions');
    }

    /**
     * Get Menu Categories
     */
    public function categories()
    {
        return $this->hasMany('App\Categories');
    }

    /**
     * Get Menu
     */
    public function menu()
    {
        return $this->hasMany('App\Menu');
    }

    /**
     * Get PublicDishes
     */
    public function public_dishes()
    {
        return $this->hasMany('App\PublicDishes');
    }

    /**
     * Get Staff
     */
    public function staff()
    {
        return $this->hasMany('App\Staff');
    }

    /**
     * Get Daily Menu
     */
    public function dailyMenu()
    {
        return $this->hasMany('App\Daily');
    }

}
