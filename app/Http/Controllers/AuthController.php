<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCreateRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm() {
        return view('auth.register');
    }

    public function loginForm() {
        return view('auth.login');
    }

    public function register(RequestCreateRegister $request) {
        $user = new User();
        $user->pseudo = $request->get('pseudo');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect()->route('auth.loginForm');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('auth.loginForm')->withErrors('Vos identifiants sont erronés, veuillez réessayer.');
        }
    }
}
