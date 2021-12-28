<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    function controller()
    {
        $user_id = Session::get("user")["id"];
        $all_products = DB::table("cart")->join("products", "cart.products_id", "=", "products.id")->where("cart.users_id", $user_id)->select("products.*")->get();

        return view("cart_items", ["products_object" => $all_products]);
    }

    static function getProducts()
    {
        $current_user_id = Session::get("user")["id"];
        $total_products = DB::table("cart")->where("cart.users_id", $current_user_id)->get();

        return $total_products;
    }
}
