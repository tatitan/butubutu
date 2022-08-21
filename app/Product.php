<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function getPaginateByLimit(int $limit_count = 50)
    {
        return $this->orderBy('updated_at' , 'DESC')->paginate($limit_count);
    }
}
