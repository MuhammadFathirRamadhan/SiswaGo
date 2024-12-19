<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Login gagal. Periksa kembali kredensial Anda.');
    }

    // Menampilkan halaman register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Menangani proses register
    public function register(Request $request)
    {
        // Validasi data registrasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);
    
        // Proses registrasi
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        // Login otomatis setelah registrasi
        Auth::login($user);
    
        // Redirect ke halaman dashboard setelah registrasi
        return redirect()->route('dashboard');
    }
    

    // Menangani logout
// In AuthController
public function logout(Request $request)
{
    Auth::logout();  // Log out the user
    $request->session()->invalidate();  // Invalidate the session
    $request->session()->regenerateToken();  // Regenerate CSRF token to prevent session fixation
    return redirect('/');  // Redirect to login or home page after logout
}

}
