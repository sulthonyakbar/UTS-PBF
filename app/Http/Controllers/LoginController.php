<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
            return view('login');
    }

    public function loginPost(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect('/warga')->with('success', 'Login Berhasil');
        }else{
            return back()->with('error', 'Email atau Password salah');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
