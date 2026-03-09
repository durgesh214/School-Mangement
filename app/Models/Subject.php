<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $primaryKey = 'subject_id';

    protected $fillable = [
        'subject_name',
        'class',
        'teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

    public function results()
    {
        return $this->hasMany(Result::class,'subject_id');
    }
}