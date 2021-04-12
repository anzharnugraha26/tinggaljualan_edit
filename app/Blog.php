<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    protected $fillable = [
        'judul', 'category_id','content','image','slug'
    ];

    public function category(){
        return $this->BelongsTo(CategoryBlog::class);
    }

}
