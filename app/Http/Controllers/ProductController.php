<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    //
    function index()
    {
        $product_data = Product::all();

        return view("product", ["products" => $product_data]);
    }

    function details($id)
    {
        $product_data_details = Product::find($id);
        return view("details", ["products" => $product_data_details]);
    }

    function addToCart(Request $req)
    {
        if ($req->session()->has("user")) {
            $cartObject = new Cart();
            $cartObject->users_id = $req->session()->get("user")["id"];
            $cartObject->products_id = $req->product_id;
            $cartObject->save();
            return redirect("/");
        } else {
            return redirect("/login");
        }
    }
}
