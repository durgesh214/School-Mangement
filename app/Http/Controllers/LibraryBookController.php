<?php

namespace App\Http\Controllers;

use App\Models\LibraryBook;
use Illuminate\Http\Request;

class LibraryBookController extends Controller
{
    // ✅ List
    public function index()
    {
        $books = LibraryBook::latest()->get();
        return view('library.index', compact('books'));
    }

    // ✅ Add Form
    public function create()
    {
        return view('library.create');
    }

    // ✅ Save
    public function store(Request $request)
    {
        $request->validate([
            'book_title'       => 'required|string|max:200',
            'author'           => 'required|string|max:100',
            'isbn'             => 'required|string|unique:library_books,isbn',
            'category'         => 'required|string|max:100',
            'total_copies'     => 'required|integer|min:1',
            'available_copies' => 'required|integer|min:0',
            'shelf_no'         => 'required|string|max:20',
            'status'           => 'required|string|max:20',
        ]);

        LibraryBook::create($request->all());

        return redirect()->route('library.index')
               ->with('success', 'Book successfully add ho gayi!');
    }

    // ✅ Edit Form
    public function edit($id)
    {
        $book = LibraryBook::findOrFail($id);
        return view('library.edit', compact('book'));
    }

    // ✅ Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'book_title'       => 'required|string|max:200',
            'author'           => 'required|string|max:100',
            'isbn'             => 'required|string|unique:library_books,isbn,'.$id,
            'category'         => 'required|string|max:100',
            'total_copies'     => 'required|integer|min:1',
            'available_copies' => 'required|integer|min:0',
            'shelf_no'         => 'required|string|max:20',
            'status'           => 'required|string|max:20',
        ]);

        $book = LibraryBook::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('library.index')
               ->with('success', 'Book successfully update ho gayi!');
    }

    // ✅ Delete
    public function destroy($id)
    {
        LibraryBook::findOrFail($id)->delete();

        return redirect()->route('library.index')
               ->with('success', 'Book successfully delete ho gayi!');
    }
}