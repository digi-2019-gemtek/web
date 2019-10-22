<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user_data = array(
            'account'  => $request->post('account'),
            'password' => $request->post('password')
        );

        if(Auth::attempt($user_data)){
            return redirect()->intended('/');
        }
        else{
            return redirect('/login')->with('status', 'danger')->with('message', __('auth.loginIncorrect'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
