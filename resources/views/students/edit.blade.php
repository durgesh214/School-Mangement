@extends('layouts.app')

@section('content')

<div class="container">
<h2>Edit Student</h2>

<form action="{{ route('students.update',$student->student_id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Student Name</label>
<input type="text" name="student_name" class="form-control"
value="{{ $student->student_name }}">
</div>

<div class="mb-3">
<label>Gender</label>
<select name="gender" class="form-control">
<option value="Male" {{ $student->gender=='Male' ? 'selected':'' }}>Male</option>
<option value="Female" {{ $student->gender=='Female' ? 'selected':'' }}>Female</option>
</select>
</div>

<div class="mb-3">
<label>Class</label>
<input type="text" name="class" class="form-control"
value="{{ $student->class }}">
</div>

<div class="mb-3">
<label>Section</label>
<input type="text" name="section" class="form-control"
value="{{ $student->section }}">
</div>

<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control"
value="{{ $student->phone }}">
</div>

<div class="mb-3">
<label>Admission Date</label>
<input type="date" name="admission_date" class="form-control"
value="{{ date('Y-m-d',strtotime($student->admission_date)) }}">
</div>

<button type="submit" class="btn btn-primary">Update Student</button>

<a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>

</form>

</div>

@endsection