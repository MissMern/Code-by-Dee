<?php

namespace Modules\Usermanagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Usermanagement\Database\factories\MemberTransactionFactory;

class MemberTransaction extends Model
{
    use HasFactory;
    protected $table="member_transactions";

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): MemberTransactionFactory
    {
        //return MemberTransactionFactory::new();
    }
}
