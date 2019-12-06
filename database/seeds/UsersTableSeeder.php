<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin = new User();
        // $admin->name = "admin";
        // $admin->email = "admin@mail.com";
        // $admin->password = bcrypt('admin');
        // $admin->save();   
        
        //Trae los roles.
        $role_user=Role::where('name','user')->first();
        $role_admin=Role::where('name','admin')->first();

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt('admin');
        $user->save();  
        $user->roles()->attach( $role_admin);//Relaciona este usario con ese rol

        $user = new User();
        $user->name = "User";
        $user->email = "user@mail.com";
        $user->password = bcrypt('user');
        $user->save();  
        $user->roles()->attach( $role_user);

    }
}
