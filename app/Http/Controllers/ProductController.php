<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index()
    {
        $product_data = Product::all();

        return view("product", ["products" => $product_data]);
    }
}
