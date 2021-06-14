<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Test2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'test1@test.com',
            'password' =>Hash::make('123456'),
            'email_verified_at' => '2021-01-23 23:49:46',
        ]);
    }
}
