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

// Rute untuk Unit Sekolah
Route::get('/ra-sakinah/index', function () {
    return view('ra-sakinah.index'); // Halaman untuk Raudhatul Athfal Sakinah
});

Route::get('/playgroup-sakinah', function () {
    return view('user/PGP.pickups'); // Halaman untuk Playgroup Sakinah Rawamangun
});

Route::get('/TKIA/pickups', function () {
    return view('user.TKIA.pickups');
})->name('TKIA.pickups');


Route::get('/sdia-13/index', function () {
    return view('sdia-13.index'); // Halaman untuk SDIA 13 Rawamangun
});

Route::get('/smpia-12/index', function () {
    return view('smpia-12.index'); // Halaman untuk SMPIA 12 Rawamangun
});

Route::get('/smpia-55/index', function () {
    return view('smpia-55.index'); // Halaman untuk SMPIA 55 Jatimakmur
});

// Rute untuk pencarian siswa berdasarkan nama
Route::get('/siswa/cari', [StudentController::class, 'search'])->name('siswa.cari');
Route::post('/siswa/cari', [StudentController::class, 'searchResults'])->name('siswa.cari.results');

// Rute untuk Pickup
Route::get('/pickup', [PickupController::class, 'index'])->name('pickup.index');
Route::post('/pickup/create', [PickupController::class, 'create'])->name('pickup.create');
Route::get('/pickup/{id}', [PickupController::class, 'show'])->name('pickup.show');
Route::post('/pickup/{id}/update', [PickupController::class, 'update'])->name('pickup.update');
Route::delete('/pickup/{id}', [PickupController::class, 'destroy'])->name('pickup.destroy');

// Resource routes untuk Driver
Route::resource('drivers', DriverController::class);

// Rute untuk Admin (hanya untuk pengguna yang memiliki hak akses admin)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'adminIndex'])->name('admin.dashboard');
    Route::resource('/admin/users', AdminUserController::class); // Pengelolaan pengguna
});

// Halaman About
Route::get('/about', function () {
    return view('about'); // Halaman tentang
})->name('about');

// Halaman Contact
Route::get('/contact', function () {
    return view('contact'); // Halaman kontak
})->name('contact');

