<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MyOrderController extends Controller
{
    function my_orders()
    {
        $user_id = Session::get("user")["id"];
        $cart_product_data = DB::table("orders")->join("products", "orders.product_id", "=", "products.id")->where("orders.user_id", $user_id)->get();
        return view("my_orders", ["list" => $cart_product_data]);
    }
}
