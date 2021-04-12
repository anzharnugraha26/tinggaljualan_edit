<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagBlog extends Model
{
    protected $fillable = [
        'name', 'slug',
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
