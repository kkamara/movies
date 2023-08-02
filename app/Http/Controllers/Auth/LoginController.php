<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->only(['login', 'loginAction']);
        $this->middleware('auth')->only('logoutAction');
    }

    public function login() {
        $title = 'Login or Signup';        
        return view('auth.login', compact('title'));
    }

    public function loginAction(Request $request) {
        $validator = Validator::make($request->all(), [
            'login_email' => 'required|exists:users,email',
            'login_password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator, 'login');
        }

        if (
            !Auth::attempt([
                'email' => $request->get('login_email'), 
                'password' => $request->get('login_password')
            ])
        ) {
            return back()->withErrors([
                'login_email' => 'Invalid login combination',
            ], 'login');
        }

        return redirect()->route('home');
    }

    public function logoutAction() {
        Auth::logout();
        return redirect()->route('home');
    }
}
