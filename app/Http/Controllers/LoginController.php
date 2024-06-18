<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request) {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['senha'],
        ];
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/livros');
        }

        return redirect()->back();
    }

    public function logout() {
        Auth::logout();

        return redirect('/entrar');
    }
}
