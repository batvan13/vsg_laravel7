<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Mass assigned
    protected $fillable=['post','slug'];
}
