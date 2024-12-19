<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah login berhasil dengan 'name' dan 'password'
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            // Redirect ke dashboard jika login berhasil
            return redirect()->intended('/dashboard');
        }

        // Jika login gagal, beri pesan error
        return back()->with('error', 'Name atau password salah!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
