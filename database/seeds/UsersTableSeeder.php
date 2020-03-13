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

        \App\User::query()->create(
            [
                'fname' => 'John',
                'lname' => 'Doe',
                'email' => 'john@doe.com',
                'password' => bcrypt('password')
            ]
        );
    }
}
