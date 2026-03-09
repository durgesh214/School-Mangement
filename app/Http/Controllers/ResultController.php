<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Student;
use App\Models\Exam;
use App\Models\Subject;

class ResultController extends Controller
{

    public function index()
    {
        $results = Result::all();
        return view('results.index', compact('results'));
    }

    public function create()
    {
        $students = Student::all();
        $exams = Exam::all();
        $subjects = Subject::all();

        return view('results.create', compact('students','exams','subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,student_id',
            'exam_id' => 'required|exists:exams,exam_id',
            'subject_id' => 'required|exists:subjects,subject_id',
            'marks' => 'required',
            'grade' => 'required'
        ]);

        Result::create([
            'student_id' => $request->student_id,
            'exam_id' => $request->exam_id,
            'subject_id' => $request->subject_id,
            'marks' => $request->marks,
            'grade' => $request->grade
        ]);

        return redirect()->route('results.index');
    }
}