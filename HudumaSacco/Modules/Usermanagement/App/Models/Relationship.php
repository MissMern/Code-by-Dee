<?php

namespace Modules\Usermanagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Usermanagement\Database\factories\RelationshipFactory;

class Relationship extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): RelationshipFactory
    {
        //return RelationshipFactory::new();
    }
}
