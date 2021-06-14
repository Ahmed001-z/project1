<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'email_verified_at' => '2021-01-14 22:20:31',
            'password' => Hash::make('123456'),
        ]);
    }
}
