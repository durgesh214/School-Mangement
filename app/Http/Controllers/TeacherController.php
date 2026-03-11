<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    
    public function index()
    {
        $teachers = Teacher::all();
        // dd($teachers);
        return view('teachers.index', compact('teachers'));
    }

    
    public function create()
    {
        return view('teachers.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'teacher_name' => 'required|max:100',
            'gender' => 'required',
            'subject' => 'required|max:50',
            'phone' => 'required|max:15',
            'email' => 'required|email',
            'salary' => 'required|numeric',
            'join_date' => 'required|date'
        ]);

        Teacher::create($request->all());

        return redirect()->route('teachers.index')
                         ->with('success','Teacher Added Successfully');
    }

   
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'teacher_name' => 'required|max:100',
            'gender' => 'required',
            'subject' => 'required|max:50',
            'phone' => 'required|max:15',
            'email' => 'required|email',
            'salary' => 'required|numeric',
            'join_date' => 'required|date'
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());

        return redirect()->route('teachers.index')
                         ->with('success','Teacher Updated Successfully');
    }

   
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.index')
                         ->with('success','Teacher Deleted Successfully');
    }
}