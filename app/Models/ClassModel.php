<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    // Secara eksplisit menetapkan nama tabel di database
    protected $table = 'classes';

    // Kolom yang dapat diisi secara massal
    protected $fillable = ['student_id', 'class_name'];

    // Relasi ke Student (Many-to-One)
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
