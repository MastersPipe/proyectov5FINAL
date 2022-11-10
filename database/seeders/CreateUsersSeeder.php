<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'role'=>'Admin',
               'name'=>'Admin 1',
               'email'=>'admin@test.com',
               'password'=> bcrypt('123456'),
            ],

            [
               'role'=>'Docente',
               'name'=>'Docente 1',
               'email'=>'docente@test.com',
               'password'=> bcrypt('123456'),
            ],

            [
               'role'=>'Alumno',
               'name'=>'Alumno 1',
               'email'=>'alumno@test.com',
               'password'=> bcrypt('123456'),

            ],

        ];

    

        foreach ($users as $key => $user) {

            User::create($user);

        }

    }

}