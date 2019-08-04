<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = new Role();
        $super_admin->name = 'super-admin';
        $super_admin->display_name = 'Super Administrator';
        $super_admin->description = 'Admin with all rights of the System';
        $super_admin->save();
        
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->display_name = 'Administrator';
        $role_admin->description = 'System\'s Head Administrator';
        $role_admin->save();
        
        $role_student = new Role();
        $role_student->name = 'lawyer';
        $role_student->display_name = 'Lawyer';
        $role_student->description = 'A Qualified Lawyer!';
        $role_student->save();
        
        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->display_name = 'Normal User';
        $role_user->description = 'A normally registered system user';
        $role_user->save();
        
        $role_guest = new Role();
        $role_guest->name = 'guest';
        $role_guest->display_name = 'Guest User';
        $role_guest->description = 'A guest user to view the system';
        $role_guest->save();
    }
}
