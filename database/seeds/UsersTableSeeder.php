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
        User::create([
            'name' => 'Endang',
            'email' => 'enurhadi24@gmail.com',
            'password' => bcrypt('secret'),
            'status' => true
        ]);
        /*
        User::create([
            'name' => 'Nuradi',
            'email' => 'Nuradi24@gmail.com',
            'password' => bcrypt('secret'),
            'status' => true
        ]); */
    }
}
