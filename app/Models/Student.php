<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_name',
        'gender',
        'date_of_birth',
        'class',
        'section',
        'address',
        'phone',
        'admission_date'
    ];

    public function attendance()
    {
        return $this->hasMany(Attendance::class,'student_id');
    }

    public function results()
    {
        return $this->hasMany(Result::class,'student_id');
    }
}