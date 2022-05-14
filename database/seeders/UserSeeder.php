<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**Creamos un usuario y
         *  le asigamos un rol */
        User::create([

            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')

        ]) ->assignRole('Admin');

        User::create([

            'name' => 'Jesus Anaya',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456')

        ]) ->assignRole('User');

        User::create([

            'name' => 'Mairon Hernandez',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('User');

        User::factory(10)->create();
       
    }
}
