<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm() {
        return view('auth.register');
    }

    public function loginForm() {
        return view('auth.login');
    }

    public function register(Request $request) {

    }

    public function login(Request $request) {

    }
}
