<?php

namespace App\Models;

use App\Models\Task;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'user_id'

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
