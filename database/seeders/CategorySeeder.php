<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("category")->insert([
            [
                "category" => "mobile",
                "product_id" => "1"
            ],
            [
                "category" => "mobile",
                "product_id" => "2"
            ],
            [
                "category" => "mobile",
                "product_id" => "3"
            ],
            [
                "category" => "mobile",
                "product_id" => "4"
            ],
            [
                "category" => "mobile",
                "product_id" => "5"
            ],
        ]);
    }
}
