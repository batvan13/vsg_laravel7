<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Mass assigned
        protected $fillable=[
         'email', 'brand_name','phone_1','phone_2','facebook','instagram','work_time'
         ];
}
