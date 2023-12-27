<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            'name' => "Admin ",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('11111111'),
            'adminstration_level' => 1
        ]);

    }
}
