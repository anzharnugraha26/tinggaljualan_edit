<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'content', 'category_id', 'image', 'slug', 'user_id', 'coment'
    ];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Blog\CategoryPost');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Blog\Tag');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
