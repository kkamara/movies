<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login() {
        $title = 'Login or Signup';        
        return view('auth.login', compact('title'));
    }
}
