<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    // Mass assigned
    protected $fillable=['apart_name','address','desc_short','desc_long','slug'];

    public function images()
    {
        return $this->hasMany('App\ApartmentImage', 'apart_id', 'id');
    }

    public function latestImage()
    {
      return $this->hasOne('App\ApartmentImage', 'apart_id')->latest();

    }

    public function extras()
    {
        return $this->hasOne('App\Extra', 'apart_id', 'id');
    }

    public function calendar()
        {
            return $this->hasMany('App\Event', 'apart_id', 'id');
        }
}
