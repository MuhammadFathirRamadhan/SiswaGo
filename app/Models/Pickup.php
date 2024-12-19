<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'pickup_time', 'status'];

    // Relasi ke model Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
