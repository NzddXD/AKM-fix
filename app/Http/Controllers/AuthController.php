<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function forbidden()
    {
        abort(403, 'Forbidden');
    }

    public function showLogin()
    {
        return view('auth.login');
    }
}