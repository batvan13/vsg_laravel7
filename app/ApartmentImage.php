<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmentImage extends Model
{
     // Mass assigned
         protected $fillable=['apart_id','image'];

         public function apartment()
         {
             return $this->belongsTo('App\Apartment');
         }
}
