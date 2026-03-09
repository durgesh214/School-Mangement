@extends('layouts.app')

@section('content')

<div class="container">

<h2>Edit Exam</h2>

<form action="{{ route('exams.update',$exam->exam_id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Exam Name</label>
<input type="text" name="exam_name" value="{{ $exam->exam_name }}" class="form-control">
</div>

<div class="mb-3">
<label>Class</label>
<input type="text" name="class" value="{{ $exam->class }}" class="form-control">
</div>

<div class="mb-3">
<label>Exam Date</label>
<input type="date" name="exam_date" value="{{ $exam->exam_date }}" class="form-control">
</div>

<button class="btn btn-success">Update Exam</button>

<a href="{{ route('exams.index') }}" class="btn btn-secondary">Back</a>

</form>

</div>

@endsection