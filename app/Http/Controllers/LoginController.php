<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login', ['title' => 'Login | SiDesa']);
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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register()
    {
        return view('register', ['title' => 'Register | SiDesa']);
    }

    public function doRegister(){
        $data = [
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ];

        DB::table('users')->insert($data);
        return redirect('/')->with('success', 'Register Berhasil');
    }
}
