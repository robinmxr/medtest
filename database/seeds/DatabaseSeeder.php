<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '2',
            'name' => 'SysAdmin',
            'email' => 'reajulbd786@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
