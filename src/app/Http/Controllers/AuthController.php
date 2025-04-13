<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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

    public function register(RegisterRequest $request)
     {
        $user = $request->validated();

        User::create([
        'name' => $user['name'],
        'email' => $user['email'],
        'password' => Hash::make($user['password']),
    ]);

    return redirect()->route('login');
    }

}