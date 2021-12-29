<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    function controller()
    {
        $user_id = Session::get("user")["id"];
        $all_products = DB::table("cart")->join("products", "cart.products_id", "=", "products.id")->where("cart.users_id", $user_id)->select("products.*", "cart.id as cart_id")->get();

        return view("cart_items", ["products_object" => $all_products]);
    }

    function removeCart($id)
    {
        cart::destroy($id);
        return redirect("/cart-items");
    }

    function orderNow()
    {
        $user_id = Session::get("user")["id"];
        $total_amount = DB::table("cart")->join("products", "cart.products_id", "=", "products.id")->where("cart.users_id", $user_id)->sum("products.products_price");

        return view("order_now", ["total_amount" => $total_amount]);
    }

    function payment_details(Request $request)
    {
        return $request;
    }
}
