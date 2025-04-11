<?php

namespace Modules\Usermanagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Usermanagement\Database\factories\ApproverFactory;
 use App\User;
class Approver extends Model
{
    use HasFactory;

    protected $table="management_users";

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): ApproverFactory
    {
        //return ApproverFactory::new();
    }

     public function user()
    {
        return $this->belongsTo(User::class,'UserId');
    }
}
