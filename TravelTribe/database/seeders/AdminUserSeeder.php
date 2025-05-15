<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@traveltribe.com'], // unique identifier
            [
                'name' => 'Admin User',
                'password' => Hash::make('password123'), // change to a strong password
                'is_admin' => true,
            ]
        );
    }
}
