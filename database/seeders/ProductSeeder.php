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
            ], [
                "products_name" => "Sony Bravo Tv",
                "products_price" => "200",
                "products_description" => "Sony 55'', Class X80j Series, LED 4k Series Smart Google Tv",
                "products_category" => "Television",
                "products_gallery" => "https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6450/6450688_bd.jpg"
            ], [
                "products_name" => "Sony TZ OLED",
                "products_price" => "500",
                "products_description" => "OLED Tv, 70'' Class X10J Series, 4k Smart Tv",
                "products_category" => "Television",
                "products_gallery" => "https://www.sony.com/image/4dfd9ca48ba82b26b620b9049c099665?fmt=pjpeg&wid=660&hei=660&bgcolor=F1F5F9&bgc=F1F5F9"
            ], [
                "products_name" => "HP Laptop 15",
                "products_price" => "1000",
                "products_description" => "Hp laptop 15 model, Core i-9, RAM 16 GB, ROM 516 SSD, 13'' touch screen",
                "products_category" => "Laptop",
                "products_gallery" => "https://mrlaptop.pk/wp-content/uploads/2020/04/copy-hp-15-da-1-1425-168011-120319051007.jpg"
            ], [
                "products_name" => "HP Envy 14",
                "products_price" => "972",
                "products_description" => "Hp Envy 14 Dragonfly Max laptop, Core i-9, RAM 8 GB, ROM 516 SSD, 13'' touch screen",
                "products_category" => "Laptop",
                "products_gallery" => "https://i.gadgets360cdn.com/large/hp_envy_14_1_1610345090137.jpg"
            ]

        ]);
    }
}
