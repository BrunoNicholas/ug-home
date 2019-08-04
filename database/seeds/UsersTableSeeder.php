<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user');
    	
        $user_super = new User();
        $user_super->name = 'Bruno Nicholas';
        $user_super->email = 'sbnibro256@gmail.com';
        $user_super->password = bcrypt('dollar');
        $user_super->gender = 'Male';
        $user_super->telephone = '0782407042';
        $user_super->location = 'Kampala';
        $user_super->role = 'super-admin';
        $user_super->maritual_status = 'single';
        $user_super->nationality = 'Ugandan';
        $user_super->occupation = 'Student';
        $user_super->bio = 'Am a loving good Christian!';
        $user_super->status = 'Active';
        $user_super->save();
        $user_super->attachRole(Role::where('name','super-admin')->first());

        $user_main = new User();
        $user_main->name = 'Sunday Lukwiya';
        $user_main->email = 'sundaymorganl@gmail.com';
        $user_main->password = bcrypt('dollar');
        $user_main->gender = 'Male';
        $user_main->maritual_status = 'single';
        $user_main->location = 'Kampala';
        $user_main->role = 'admin';
        $user_main->nationality = 'Ugandan';
        $user_main->bio = 'I Love Money!';
        $user_main->status = 'Active';
        $user_main->save();
        $user_main->attachRole(Role::where('name','admin')->first());

        // $user_admin = new User();
        // $user_admin->name = 'Peter Wamanga Eric';
        // $user_admin->email = 'peter@email.com';
        // $user_admin->password = bcrypt('dollar');
        // $user_admin->gender = 'Male';
        // $user_admin->maritual_status = 'married';
        // $user_admin->location = 'Kampala';
        // $user_admin->role = 'admin';
        // $user_admin->nationality = 'Ugandan';
        // $user_admin->bio = 'Am a loving good Christian!';
        // $user_admin->status = 'Active';
        // $user_admin->save();
        // $user_admin->attachRole(Role::where('name','admin')->first());
    }
}
