<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\cart;
use App\Models\order;

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
        $user_id = Session::get("user")["id"];
        $all_items_from_cart = cart::where("users_id", $user_id)->get();
        foreach ($all_items_from_cart as $cart) {
            $order_object = new order;
            $order_object->product_id = $cart["products_id"];
            $order_object->user_id = $cart["users_id"];
            $order_object->status = "Pending";
            $order_object->payment_method = $request->options;
            $order_object->payment_status = "Pending";
            $order_object->address = $request->address;
            $order_object->save();
            cart::where("users_id", $user_id)->delete();
        }

        return redirect("/");
    }
}
