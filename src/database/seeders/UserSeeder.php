<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name'      =>  'Admin',
            'email'      =>  'admin@mail.com',
            'password'  =>  bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name'      =>  'User',
            'email'      =>  'user@mail.com',
            'password'  =>  bcrypt('12345678')
        ]);
    }
}
