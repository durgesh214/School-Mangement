<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Teacher;

class SubjectController extends Controller
{
    
    public function index()
    {
        $subjects = Subject::with('teacher')->get();
        return view('subjects.index', compact('subjects'));
    }

    
    public function create()
    {
        $teachers = Teacher::all();
        return view('subjects.create', compact('teachers'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'subject_name' => 'required|max:100',
            'class' => 'required|max:20',
            'teacher_id' => 'required'
        ]);

        Subject::create([
            'subject_name' => $request->subject_name,
            'class' => $request->class,
            'teacher_id' => $request->teacher_id
        ]);

        return redirect()->route('subjects.index')
                         ->with('success','Subject Added Successfully');
    }

   
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $teachers = Teacher::all();

        return view('subjects.edit', compact('subject','teachers'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'subject_name' => 'required|max:100',
            'class' => 'required|max:20',
            'teacher_id' => 'required'
        ]);

        $subject = Subject::findOrFail($id);

        $subject->update([
            'subject_name' => $request->subject_name,
            'class' => $request->class,
            'teacher_id' => $request->teacher_id
        ]);

        return redirect()->route('subjects.index')
                         ->with('success','Subject Updated Successfully');
    }

    
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect()->route('subjects.index')
                         ->with('success','Subject Deleted Successfully');
    }
}