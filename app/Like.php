<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //



    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
