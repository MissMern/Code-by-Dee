<?php

namespace Modules\Usermanagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Usermanagement\Database\factories\LoanFactory;

class Loan extends Model
{
    use HasFactory;
    protected $table="loans";

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): LoanFactory
    {
        //return LoanFactory::new();
    }
}
