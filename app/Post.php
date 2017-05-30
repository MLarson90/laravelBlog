<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $gaurded=[];
    public static function show()
    {
      return Static::all();
    }
}
