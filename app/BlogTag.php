<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    protected $fillable = [
        'blog_id', 'tag_blog_id'
    ]; 
}
