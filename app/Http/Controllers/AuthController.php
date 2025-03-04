<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }
    public function store($request) {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:user'],
            'password' => 'required',
            'role' => 'required'
        ]);
    }
}

