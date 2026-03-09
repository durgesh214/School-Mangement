<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $primaryKey = 'teacher_id';

    protected $fillable = [
        'teacher_name',
        'gender',
        'subject',
        'phone',
        'email',
        'salary',
        'join_date'
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class,'teacher_id');
    }
}