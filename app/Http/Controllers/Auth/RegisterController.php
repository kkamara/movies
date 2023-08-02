<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    protected ?User $user = null;

    public function __construct() {
        $this->middleware('guest')->only('registerAction');
        $this->user = new User;
    }

    public function registerAction(Request $request) {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:3|max:255',
            'email' => 'required|confirmed|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator, 'register')
                ->withInput();
        }

        $this->user->first_name = $request->get('first_name');
        $this->user->last_name = $request->get('last_name');
        $this->user->email = $request->get('email');
        $this->user->password = Hash::make(
            $request->get('password'),
        );
        $this->user->save();
        Auth::login($this->user);

        return redirect()->route('home');
    }
}
