<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function getByCategory(int $limit_count = 50)
    {
        return $this->products()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
