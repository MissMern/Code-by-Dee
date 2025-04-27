<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    public $timestamps = true;


}
