<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'duration',
        'location',
        'image_url',
        'user_id', // Assuming you have a user_id to associate with the tour
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    
}
