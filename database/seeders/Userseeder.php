<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            "name"=>"admin",
            "last_name"=>"main",
            "phone"=>"09129035279",
            "email"=>"admin@gmail.com",
            "role"=>"admin",
            "password"=>bcrypt("1234567")
        ]);

    }
}
