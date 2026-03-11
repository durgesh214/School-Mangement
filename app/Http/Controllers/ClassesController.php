<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
   
    public function index()
    {
        $classes = Classes::latest()->get();
        // dd($classes);
        return view('classes.index', compact('classes'));
    }

   
    public function create()
    {
        return view('classes.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'class_name'     => 'required|string|max:100',
            'section'        => 'required|string|max:10',
            'teacher'        => 'required|string|max:100',
            'subject'        => 'required|string|max:100',
            'total_students' => 'required|integer|min:1',
            'room_no'        => 'required|string|max:20',
        ]);

        Classes::create($request->all());

        return redirect()->route('classes.index')
               ->with('success', 'Class successfully add ho gayi!');
    }

   
    public function edit($id)
    {
        $class = Classes::findOrFail($id);
        return view('classes.edit', compact('class'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'class_name'     => 'required|string|max:100',
            'section'        => 'required|string|max:10',
            'teacher'        => 'required|string|max:100',
            'subject'        => 'required|string|max:100',
            'total_students' => 'required|integer|min:1',
            'room_no'        => 'required|string|max:20',
        ]);

        $class = Classes::findOrFail($id);
        $class->update($request->all());

        return redirect()->route('classes.index')
               ->with('success', 'Class successfully update ho gayi!');
    }

    
    public function destroy($id)
    {
        Classes::findOrFail($id)->delete();

        return redirect()->route('classes.index')
               ->with('success', 'Class successfully delete ho gayi!');
    }
}