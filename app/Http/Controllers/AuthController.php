<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            "title" => "Login",
            "url" => url('/assets'),
        ]);

        // 1
        // Cache::flush();
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email",
            'password' => 'required|min:5',
        ]);
        // dd($request);

        if (Auth::attempt($credentials)) {
            // dd('behasil');
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->intended('/dashboard/masterAdmin')->with('success', 'Anda Berhasil Login');
            } else if ($user->role == 'peserta') {
                return redirect()->intended('/peserta/daftar_magang')->with('success', 'Anda Berhasil Login');

                // dd("OK!");
            }

            return redirect('/');
        }

        return back()->with('loginError', 'Login Gagal!');
    }

    public function logout()
    {
        Auth::Logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
