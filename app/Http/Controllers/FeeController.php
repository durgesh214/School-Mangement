<?php

namespace App\Http\Controllers;

use App\Models\FeeStructure;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    //  List
    public function index()
    {
        $fees = FeeStructure::latest()->get();
        // dd($fees);
        return view('fees.index', compact('fees'));
    }

    //  Add Form
    public function create()
    {
        return view('fees.create');
    }

    //  Save
    public function store(Request $request)
    {
        $request->validate([
            'fee_title'  => 'required|string|max:100',
            'class_name' => 'required|string|max:50',
            'term'       => 'required|string|max:50',
            'amount'     => 'required|numeric|min:0',
            'due_date'   => 'required|string|max:50',
            'status'     => 'required|string|max:20',
        ]);

        FeeStructure::create($request->all());

        return redirect()->route('fees.index')
               ->with('success', 'Fee Structure successfully add ho gayi!');
    }

    //  Edit Form
    public function edit($id)
    {
        $fee = FeeStructure::findOrFail($id);
        return view('fees.edit', compact('fee'));
    }

    //  Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'fee_title'  => 'required|string|max:100',
            'class_name' => 'required|string|max:50',
            'term'       => 'required|string|max:50',
            'amount'     => 'required|numeric|min:0',
            'due_date'   => 'required|string|max:50',
            'status'     => 'required|string|max:20',
        ]);

        $fee = FeeStructure::findOrFail($id);
        $fee->update($request->all());

        return redirect()->route('fees.index')
               ->with('success', 'Fee Structure successfully update ho gayi!');
    }

    //  Delete
    public function destroy($id)
    {
        FeeStructure::findOrFail($id)->delete();

        return redirect()->route('fees.index')
               ->with('success', 'Fee Structure successfully delete ho gayi!');
    }
}