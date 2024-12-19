<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Pickup;
use App\Models\Driver;
use App\Models\Student;
use App\Models\ClassModel; // Model untuk kelas, pastikan ini sesuai

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'user' => Auth::user(),

            // Menghitung total siswa
            'countStudents' => Student::count(),

            // Menghitung total penjemputan
            'countPickups' => Pickup::count(),

            // Menghitung total pengemudi yang tersedia
            'countDrivers' => Driver::where('status', 'available')->count(),

            // Menghitung total kelas
            'countClasses' => ClassModel::count(),

            // Data penjemputan hari ini
            'todayPickups' => Pickup::whereDate('date', now()->toDateString())->get(),

            // Data penjemputan berikutnya
            'upcomingPickups' => Pickup::whereDate('date', '>', now()->toDateString())
                                      ->orderBy('date')
                                      ->orderBy('time')
                                      ->get(),
        ]);
    }
}
