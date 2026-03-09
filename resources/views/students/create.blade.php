@extends('layouts.app')

@section('content')

<div class="container">

<h2>Add Student</h2>

<form action="{{ route('students.store') }}" method="POST">
@csrf

<div class="mb-3">
<label>Student Name</label>
<input type="text" name="student_name" class="form-control">
</div>

<div class="mb-3">
<label>Gender</label>
<select name="gender" class="form-control">
<option value="">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select>
</div>

<div class="mb-3">
<label>Date of Birth</label>
<input type="date" name="date_of_birth" class="form-control">
</div>

<div class="mb-3">
<label>Class</label>
<input type="text" name="class" class="form-control">
</div>

<div class="mb-3">
<label>Section</label>
<input type="text" name="section" class="form-control">
</div>

<div class="mb-3">
<label>Address</label>
<textarea name="address" class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<div class="mb-3">
<label>Admission Date</label>
<input type="date" name="admission_date" class="form-control">
</div>

<button type="submit" class="btn btn-success">Save Student</button>

<a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>

</form>

</div>

@endsection