<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryBook extends Model
{
    use HasFactory;

    protected $table = 'library_books';

    protected $fillable = [
        'book_title',
        'author',
        'isbn',
        'category',
        'total_copies',
        'available_copies',
        'shelf_no',
        'status',
    ];
}