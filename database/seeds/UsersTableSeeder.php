<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'name' => 'Rizki Ananda',
            'username' => 'rizki12',
            'password' => bcrypt('password'),
            'email' => 'irsyad@parsinta.com',
        ]);
    }
}
