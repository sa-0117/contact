<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm()
    {
        return view('confirm');
    }

    public function thanks()
    {
        return view('thanks');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('ahth.register');
    }
    
}
