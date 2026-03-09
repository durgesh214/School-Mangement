<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the students.
     */
    public function index()
    {
        $students = Student::latest()->paginate(10); // or ->get() if you want all
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new student.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created student in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_name'   => 'required|string|max:100',
            'gender'         => 'required|in:Male,Female,Other',
            'date_of_birth'  => 'required|date|before:today',
            'class'          => 'required|string|max:20',
            'section'        => 'nullable|string|max:10',
            'address'        => 'nullable|string|max:255',
            'phone'          => 'nullable|string|max:15',
            'admission_date' => 'required|date',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')
            ->with('success', 'Student created successfully!');
    }

    /**
     * Display the specified student (optional - if you want a show page).
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the student.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified student.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'student_name'   => 'required|string|max:100',
            'gender'         => 'required|in:Male,Female,Other',
            'date_of_birth'  => 'required|date|before:today',
            'class'          => 'required|string|max:20',
            'section'        => 'nullable|string|max:10',
            'address'        => 'nullable|string|max:255',
            'phone'          => 'nullable|string|max:15',
            'admission_date' => 'required|date',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified student.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully!');
    }
}