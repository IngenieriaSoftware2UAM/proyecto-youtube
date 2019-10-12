<?php

use Illuminate\Database\Seeder;
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
        $admin = new User();

        $admin->name = "Administrador";
        $admin->email = "admin@mail.com";
        $admin->password = bcrypt('admin');
        $admin->save();        

    }
}
