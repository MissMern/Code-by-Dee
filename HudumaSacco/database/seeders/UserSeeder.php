<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          
            'name' => 'Super Admin',
            'email'=>'admin@hudumasacc.co.ke',
            'username'=>'00000000',
            'password'=>bcrypt('secret'),
            'telephone'=>'254703600360',
            'user_type'=>'Internal',
            'role_id'=>'Administrator',
            'org_id'=>1,
            'verification_code'=>"123456905",
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            ]);

         $user=User::latest('id')->first();




          $user->givePermissionTo(['Add Users','Delete Users','Block Users',"Reset User Passwords","Edit User Details","View User Audit Trails"]);
          $user->assignRole('Administrator');

          
          

    }
}
