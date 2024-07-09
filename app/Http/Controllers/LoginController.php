<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        // Jika Login sudah dilakukan
        if($request->isMethod('post'))
        {
            // Melakukan validasi pada inputan user
            $validated = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            // Jika lolos validasi maka lakukan login
            if(Auth::attempt($validated))
            {
                $request->session()->regenerate();
                return redirect()->intended('/')->with('masuk','Welcome Back!');
            }
            // Jika lolos validasi tapi username tidak ditumakan atau password tidak cocok, maka eror
            else
            {
                return back()->with('error', 'Akun atau Username salah');
            }
        }

        return view('login');
    }

    public function logout(Request $request)
    {
        // Melakukan Logout
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }
}
