<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Pastikan ini sesuai dengan nama tampilan Anda
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Cek kredensial
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika login berhasil, redirect ke halaman yang diinginkan
            return redirect()->intended('dashboard'); // Ganti 'dashboard' dengan rute yang sesuai
        }

        // Jika login gagal, kembali ke form login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Ganti dengan rute yang sesuai
    }
}
