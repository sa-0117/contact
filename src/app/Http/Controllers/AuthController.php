<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function entrance() {
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
            return redirect()->route('admin');
    }

    public function show() {
        return view('auth.register');
    }

    public function register(RegisterRequest $request) {
        return redirect()->route('login');
    }

    public function admin() {
    return view('admin.admin');
    }

}