<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('exams.index', compact('exams'));
    }

    public function create()
    {
        return view('exams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'exam_name' => 'required',
            'class' => 'required',
            'exam_date' => 'required|date'
        ]);

        Exam::create($request->all());

        return redirect()->route('exams.index')
                         ->with('success','Exam added successfully');
    }

    public function edit($id)
    {
        $exam = Exam::findOrFail($id);
        return view('exams.edit', compact('exam'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'exam_name' => 'required',
            'class' => 'required',
            'exam_date' => 'required|date'
        ]);

        $exam = Exam::findOrFail($id);
        $exam->update($request->all());

        return redirect()->route('exams.index')
                         ->with('success','Exam updated successfully');
    }

    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();

        return redirect()->route('exams.index')
                         ->with('success','Exam deleted successfully');
    }
}