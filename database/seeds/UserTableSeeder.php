<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();     
        $role_auditor = Role::where('name', 'auditor')->first();        

        $user = new User();
        $user->name = 'Vigilante';
        $user->email = 'vigilante@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);        

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Auditor';
        $user->email = 'auditor@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_auditor);
    }
}
