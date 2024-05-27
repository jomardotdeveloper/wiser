<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function store(Request $request)
    {
        $request->validate([
            "fullname" => "required",
            "username" => "required|unique:users",
            "password" => "required|confirmed|min:8",
        ]);

        User::create([
            "fullname" => $request->input("fullname"),
            "username" => $request->input("username"),
            "password" => Hash::make($request->input("password"))
        ]);

        return redirect()->route("login")->with("success", "You have been registered successfully.");
    }
}
