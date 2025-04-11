<?php

namespace Modules\Usermanagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Usermanagement\Database\factories\EdCodeFactory;

class EdCode extends Model
{
    use HasFactory;

    protected $table="edcodes";

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): EdCodeFactory
    {
        //return EdCodeFactory::new();
    }
}
