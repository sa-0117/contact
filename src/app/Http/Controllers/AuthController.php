<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function entrance() {
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
            return redirect()->route('admin');
        }

    public function admin() {
    return view('admin.admin');
    }

}