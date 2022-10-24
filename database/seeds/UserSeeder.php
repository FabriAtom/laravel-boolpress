<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fabrizio',
            'email' => 'fabrizio20@gmail.com',
            'password' => Hash::make('pippo1234'),
        ]);
    }
}
