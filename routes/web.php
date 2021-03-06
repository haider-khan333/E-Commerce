<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MyOrderController;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget("user");
    return view('login');
});
Route::post("/login", [UserController::class, "login"]);
Route::get("/", [ProductController::class, "index"]);
Route::get("details/{id}", [ProductController::class, "details"]);
Route::post("/add_to_cart", [ProductController::class, "addToCart"]);
Route::get("/cart-items", [CartController::class, "controller"]);
Route::get("remove-cart/{id}", [CartController::class, "removeCart"]);
Route::get("order_now", [CartController::class, "orderNow"]);
Route::post("payment_details", [CartController::class, "payment_details"]);
Route::get("my-orders", [MyOrderController::class, "my_orders"]);
Route::post("signup", [UserController::class, "signup"]);
Route::post("user_signed_up", [UserController::class, "user_signed_up"]);
Route::get("about_us", [UserController::class, "about_us"]);
Route::post("form_submitted", [UserController::class, "form_submitted"]);
Route::get("forgot_password", [UserController::class, "forgot_password"]);
Route::post("resetpassword", [UserController::class, "resetpassword"]);
