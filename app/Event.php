<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
            'title', 'start', 'end','apart_id'
        ];

    public function apartment()
             {
                 return $this->belongsTo('App\Apartment');
             }
}
