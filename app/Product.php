<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'seller_id',
        'title',
        'description',
        'category_id',
    ];


    public function getPaginateByLimit(int $limit_count = 50)
    {
        return $this::with('category')->orderBy('updated_at' , 'DESC')->paginate($limit_count);
    }



    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function picture()
    {
        return $this->belongsTo('App\Picture');
    }

    public function Comment()
    {
        return $this->belongsTo('App\Comment');
    }

    public function Like()
    {
        return $this->belongsTo('App\Like');
    }
}
