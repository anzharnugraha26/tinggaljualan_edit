<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagBlog extends Model
{
    protected $fillable = [
        'name', 'slug',
    ];
}
