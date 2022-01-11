<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\about_us;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $request)
    {
        //this below variable has the data which comes from data base
        $user_data = User::where(["email" => $request->email])->first();
        if (!$user_data || !Hash::check($request->password, $user_data->password)) {
            return redirect("/login");
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

    function about_us()
    {
        return view("about_us");
    }

    function form_submitted(Request $req)
    {
        $about_us_object = new about_us();
        $about_us_object->name = $req->Name;
        $about_us_object->email = $req->Email;
        $about_us_object->description = $req->description;
        $about_us_object->save();
        return redirect("/");
    }
}
