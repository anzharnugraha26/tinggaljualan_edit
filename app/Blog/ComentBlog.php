<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class ComentBlog extends Model
{
    protected $fillable = [
        'blog_id','subject', 'email', 'message','name'
    ];
}
