<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            "username" => "required",
            "password" => "required",
        ]);

        $credentials = ["username" => $request->input("username"), "password" => $request->input("password")];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->is_admin) {
                return redirect()->intended("/users");
            }

            return redirect()->intended("/dashboard");
        }

        return redirect()->back()->withInput()->withErrors(["error" => "Invalid credentials."]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
