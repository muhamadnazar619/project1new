<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if (auth()->check()) {
            return redirect()->route('guru')->with('warning', 'Kamu sudah login');
        }
        
        return view('auth.main');
    }

    public function loginProses(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, alihkan ke halaman yang sesuai
            return redirect()->route('siswa');
        }

        // Jika autentikasi gagal, alihkan kembali ke halaman masuk dengan pesan error
        return redirect()->route('admin.login')->with('error', 'Email atau password salah.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Berhasil Logout.'); // Ganti 'login' dengan rute halaman masuk yang sesuai
    }
}
