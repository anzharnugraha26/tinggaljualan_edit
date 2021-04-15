<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $fillable = [
        'name','jumlah'
    ];
    public function posts()
    {
        return $this->hasMany('App\Blog\Post');
    }
}
