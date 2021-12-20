<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("products")->insert([
            [
                "products_name" => "Samsung Note 10",
                "products_price" => "500",
                "products_description" => "Smart phone, 4 gb ram with with 256 gb ROM. 40 mp camera back 20 mp camera front",
                "products_category" => "Mobiles",
                "products_gallery" => "https://propakistani.pk/price/wp-content/uploads/2019/03/samsung-note10.jpg"
            ], [
                "products_name" => "Samsung A03s",
                "products_price" => "100",
                "products_description" => "Smart phone, 3 gb ram",
                "products_category" => "Mobiles",
                "products_gallery" => "https://images.samsung.com/is/image/samsung/p6pim/levant/feature/155465768/levant-feature-easy-on-the-eyes-and-the-hands-506884341?"
            ], [
                "products_name" => "Samsung A32",
                "products_price" => "400",
                "products_description" => "Samsung a32, 3 gb ram, 126 gb ROM",
                "products_category" => "Mobiles",
                "products_gallery" => "https://www.pakmobizone.pk/wp-content/uploads/2021/03/Samsung-Galaxy-A32-Awesome-Violet-7-718x1024.jpg"
            ], [
                "products_name" => "Samsung A12",
                "products_price" => "120",
                "products_description" => "Beautiful Samsung A12, 3 gb ram, 256 gb ROM",
                "products_category" => "Mobiles",
                "products_gallery" => "https://www.mytrendyphone.eu/images/Samsung-Galaxy-A12-64GB-Black-8806090828126-25012021-01-p.jpg"
            ]

        ]);
    }
}
