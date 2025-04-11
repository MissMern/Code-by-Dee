<?php

namespace Modules\Usermanagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Usermanagement\Database\factories\MemberFactory;
 use App\User;
class Member extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): MemberFactory
    {
        //return MemberFactory::new();
    }

     public function user()
    {
        return $this->belongsTo(User::class,'UserId');
    }
}
