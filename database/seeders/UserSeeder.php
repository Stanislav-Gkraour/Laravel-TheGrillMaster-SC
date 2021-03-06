<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => 'Chris',
            'email' => 'chris@gmail.com',
            'password' => Hash::make('testtest'),
            'role_id' => 1,
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Stan',
            'email' => 'Stan@gmail.com',
            'password' => Hash::make('stan1998'),
            'role_id' => 1,
            'created_at' => now()
        ]);
    }
}
