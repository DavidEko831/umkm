<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial
        if (Auth::attempt($request->only('email', 'password'))) {
            // Jika berhasil login, redirect ke halaman homeadmin
            return redirect()->route('homeadmin');
        }

        // Jika login gagal, kembali ke form login dengan error
        return back()->withErrors([
            'error' => 'Email atau password salah!',
        ]);
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect ke halaman beranda setelah logout
        return redirect()->route('beranda');
    }
}
