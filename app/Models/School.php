<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $primaryKey = 'school_id';

    protected $fillable = [
        'school_name',
        'address',
        'phone',
        'email',
        'principal_name'
    ];
}