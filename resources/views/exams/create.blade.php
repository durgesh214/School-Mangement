@extends('layouts.app')

@section('content')

<div class="container">

<h2>Add Exam</h2>

<form action="{{ route('exams.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Exam Name</label>
<input type="text" name="exam_name" class="form-control">
</div>

<div class="mb-3">
<label>Class</label>
<input type="text" name="class" class="form-control">
</div>

<div class="mb-3">
<label>Exam Date</label>
<input type="date" name="exam_date" class="form-control">
</div>

<button class="btn btn-success">Save Exam</button>

<a href="{{ route('exams.index') }}" class="btn btn-secondary">Back</a>

</form>

</div>

@endsection