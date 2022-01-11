<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $request)
    {
        //this below variable has the data which comes from data base
        $user_data = User::where(["email" => $request->email])->first();
        if (!$user_data || !Hash::check($request->password, $user_data->password)) {

            // return "Username or password is in-correct";
        } else {
            $request->session()->put("user", $user_data);
            return redirect("/");
        }
    }

    function signup()
    {
        return view("signup");
    }

    function user_signed_up(Request $req)
    {
        //add to database
        $user_object = new User();
        $user_object->name = $req->First_Name .  " " . $req->Last_Name;
        $user_object->email = $req->email;
        $user_object->password = Hash::make($req->password);
        $user_object->save();
        return redirect("/login");
    }
}
