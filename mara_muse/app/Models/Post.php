<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'category_id',
        'slug',
       
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
public function user()
{
    return $this->belongsTo(User::class);
}
}
