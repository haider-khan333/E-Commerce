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
        //
        DB::table("users")->insert([
            "name" => "Haziq Ali",
            "email" => "haziq_123@hotmail.com",
            "password" => Hash::make("khan@333")
        ]);
    }
}
