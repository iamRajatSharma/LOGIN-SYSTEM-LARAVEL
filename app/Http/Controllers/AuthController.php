<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::user()) {
            return redirect(route('welcome'));
        }
        return view('login');
    }

    public function register()
    {
        if (Auth::user()) {
            return redirect(route('welcome'));
        }
        return view('register');
    }

    public function welcome()
    {
        if (!Auth::user()) {
            return redirect(route('login'));
        }
        return view('welcome');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('welcome')->with('message', 'User Logged In Successfully')->with('type', 'success');
        } else {
            return redirect()->route('login')->with('message', 'Login details are not valid')->with('type', 'danger');
        }
    }


    public function doRegisteration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $check = $user->save();
        if ($check) {
            return redirect()->route('login')->with('message', 'User Registered Successfully')->with('type', 'success');
        } else {
            return redirect()->route('doRegister')->with('message', 'Internal Server Error')->with('type', 'danger');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login')->with('message', 'User Logout Successfully')->with('type', 'success');
    }
}
