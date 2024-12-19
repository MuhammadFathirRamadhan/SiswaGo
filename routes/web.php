<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PickupController;
use App\Http\Controllers\StudentController; // Menambahkan kontroler untuk siswa
use Illuminate\Support\Facades\Route;

// Route utama untuk aplikasi (halaman home)
Route::get('/', function () {
    return view('index'); // Gantilah dengan halaman utama yang sesuai
})->name('home');


// Halaman Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Halaman Register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Dashboard (hanya untuk user yang sudah login)
Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

