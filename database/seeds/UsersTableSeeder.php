<?php

use App\User;
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
        User::create([
            'name' => 'Aditia Firmansyah',
            'email' => 'aditia@ranesia.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => bcrypt('password'),
        ]);
    }
}
