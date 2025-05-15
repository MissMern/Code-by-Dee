<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Check if the admin user already exists
        if (User::where('email', 'admin@thetraveltribe.com')->doesntExist()) {
            User::create([
                'name' => 'Dee the Admin',
                'email' => 'admin@thetraveltribe.com',
                'password' => Hash::make('11025422'), // Set your password here
                'is_admin' => true, // Admin flag
            ]);
        }
    }
}
