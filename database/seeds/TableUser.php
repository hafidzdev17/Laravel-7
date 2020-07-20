<?php

use Illuminate\Database\Seeder;
use App\User;

class TableUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Didik Prabowo',
                'email' => 'hafidz@gmail.com',
                'password' => '123'
            ],
            [
                'name' => 'Didik Prabowo',
                'email' => 'naruto@gmail.com',
                'password' => '123'
            ],
            [
                'name' => 'Didik Prabowo',
                'email' => 'didikprab@gmail.com',
                'password' => '123'
            ],
        ]);
    }
}
