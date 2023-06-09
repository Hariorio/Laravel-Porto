<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

      //  dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}