<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(request $request)
    {
        $contact = $request ->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3','address', 'building', 'inquiry-type', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {   
        $contact = $request ->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3','address', 'building', 'inquiry-type', 'detail']);
        return view('thanks');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

        public function admin()
    {
        return view('admin.admin');
    }
    
}
