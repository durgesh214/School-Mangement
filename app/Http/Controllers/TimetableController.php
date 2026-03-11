<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    // ✅ List
    public function index()
    {
        $timetables = Timetable::latest()->get();
        return view('timetables.index', compact('timetables'));
    }

    // ✅ Add Form
    public function create()
    {
        return view('timetables.create');
    }

    // ✅ Save
    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required|string|max:50',
            'section'    => 'required|string|max:10',
            'subject'    => 'required|string|max:100',
            'teacher'    => 'required|string|max:100',
            'day'        => 'required|string|max:20',
            'start_time' => 'required|string|max:20',
            'end_time'   => 'required|string|max:20',
            'room_no'    => 'required|string|max:20',
        ]);

        Timetable::create($request->all());

        return redirect()->route('timetables.index')
               ->with('success', 'Timetable successfully add ho gaya!');
    }

    // ✅ Edit Form
    public function edit($id)
    {
        $timetable = Timetable::findOrFail($id);
        return view('timetables.edit', compact('timetable'));
    }

    // ✅ Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'class_name' => 'required|string|max:50',
            'section'    => 'required|string|max:10',
            'subject'    => 'required|string|max:100',
            'teacher'    => 'required|string|max:100',
            'day'        => 'required|string|max:20',
            'start_time' => 'required|string|max:20',
            'end_time'   => 'required|string|max:20',
            'room_no'    => 'required|string|max:20',
        ]);

        $timetable = Timetable::findOrFail($id);
        $timetable->update($request->all());

        return redirect()->route('timetables.index')
               ->with('success', 'Timetable successfully update ho gaya!');
    }

    // ✅ Delete
    public function destroy($id)
    {
        Timetable::findOrFail($id)->delete();

        return redirect()->route('timetables.index')
               ->with('success', 'Timetable successfully delete ho gaya!');
    }
}