<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'restaurant_id',
        'user_id',
        'type',
    ];
    
    public function users()
    {
        return $this->belongsTo('App\Restaurant');
    }

}
