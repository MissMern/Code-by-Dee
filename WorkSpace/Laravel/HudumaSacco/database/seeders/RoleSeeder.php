<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Modules\Usermanagement\App\Models\Permission;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'Add Users',"category"=>"User Management",]);
        Permission::create(['name' => 'View System Users',"category"=>"User Management"]);
        Permission::create(['name' => 'Delete Users',"category"=>"User Management",]);
        Permission::create(['name' => 'Block Users',"category"=>"User Management",]);
        Permission::create(['name' => 'Edit User Details',"category"=>"User Management",]);
         Permission::create(['name' => 'Reset User Passwords',"category"=>"User Management"]);

          Permission::create(['name' => 'View User Audit Trails',"category"=>"User Management"]);


           /*
           Author:Isanya Hilary
           Date:4th Nov 2023
           Sub Module:Payroll Dashboards
           Description:Seeds System Permissions related to which Dashboard A user should See when they login to payroll Module.

           */
        Permission::create(['name' => 'View Administrator Dashboard',"category"=>"Dashboard Management"]);

         Permission::create(['name' => 'View HR Manager Dashboard',"category"=>"Dashboard Management"]);

         Permission::create(['name' => 'View Payroll Manager Dashboard',"category"=>"Dashboard Management"]);



      



      

        // create roles and assign created permissions



        $role = Role::create(['name' => 'Administrator']);
        $role->givePermissionTo(Permission::all());
        $hradmin = Role::create(['name' => 'ChairPerson']);
        $payrollmanager = Role::create(['name' => 'Secretary']);
        $compliment = Role::create(['name' => 'Treasurer']);
        $readonlyAdmin = Role::create(['name' => 'Readonly Admin']);
        $readonlyAdmin = Role::create(['name' => 'Member']);
         
        


         
       

    }
}
