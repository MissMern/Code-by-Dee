<?php

namespace Modules\Usermanagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Usermanagement\Database\factories\PermissionFactory;

class Permission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): PermissionFactory
    {
        //return PermissionFactory::new();
    }
}
