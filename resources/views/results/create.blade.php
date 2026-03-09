@extends('layouts.app')

@section('content')

<div class="container mt-4">

<h2 class="mb-4">Add Result</h2>

<form action="{{ route('results.store') }}" method="POST">

@csrf

<div class="mb-3">
<label class="form-label">Student</label>

<select name="student_id" class="form-control">
@foreach($students as $student)
<option value="{{ $student->student_id }}">
{{ $student->student_name }}
</option>
@endforeach
</select>

</div>

<div class="mb-3">
<label class="form-label">Exam</label>

<select name="exam_id" class="form-control">
@foreach($exams as $exam)
<option value="{{ $exam->exam_id }}">
{{ $exam->exam_name }}
</option>
@endforeach
</select>

</div>

<div class="mb-3">
<label class="form-label">Subject</label>

<select name="subject_id" class="form-control">
@foreach($subjects as $subject)
<option value="{{ $subject->subject_id }}">
{{ $subject->subject_name }}
</option>
@endforeach
</select>

</div>

<div class="mb-3">
<label class="form-label">Marks</label>
<input type="text" name="marks" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Grade</label>
<input type="text" name="grade" class="form-control">
</div>

<button class="btn btn-success">Save Result</button>

<a href="{{ route('results.index') }}" class="btn btn-secondary">Back</a>

</form>

</div>

@endsection