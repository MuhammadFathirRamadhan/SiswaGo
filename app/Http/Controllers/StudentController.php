<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Pastikan model Student sudah ada

class StudentController extends Controller
{
    public function showPickups()
    {
        // Mengambil data siswa dari database
        $students = Student::all(); // Sesuaikan dengan model dan tabel Anda
        return view('user.TKIA.pickups', compact('students'));
    }
}
