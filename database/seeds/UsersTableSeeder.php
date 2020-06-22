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
        $user = new User();
        $user->nombre = "Admin";
        $user->email = "Admin@gmail.com";
        $user->password = bcrypt("123");
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->num_control = "2016082426";
        $user->nombre = "Luis Jesus";
        $user->apellido_paterno = "Aviles";
        $user->apellido_materno = "Morales";
        $user->email = "Luis@gmail.com";
        $user->password = bcrypt("123");
        $user->role_id = 2;
        $user->study_plan_id = 1;
        $user->save();
    }
}
