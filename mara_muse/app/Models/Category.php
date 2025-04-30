<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'slug',
        'status',
        'parent_id',
        'category_id',
        'image',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
