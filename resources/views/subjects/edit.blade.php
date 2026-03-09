@extends('layouts.app')

@section('content')

<div class="container">

<h2>Edit Subject</h2>

<form action="{{ route('subjects.update', $subject->subject_id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Subject Name</label>
<input type="text" name="subject_name"
value="{{ $subject->subject_name }}"
class="form-control">
</div>

<div class="mb-3">
<label>Class</label>
<input type="text" name="class"
value="{{ $subject->class }}"
class="form-control">
</div>

<div class="mb-3">
<label>Teacher</label>

<select name="teacher_id" class="form-control">

@foreach($teachers as $teacher)

<option value="{{ $teacher->teacher_id }}"
{{ $teacher->teacher_id == $subject->teacher_id ? 'selected' : '' }}>

{{ $teacher->teacher_name }}

</option>

@endforeach

</select>

</div>

<button type="submit" class="btn btn-primary">
Update Subject
</button>

<a href="{{ route('subjects.index') }}" class="btn btn-secondary">
Cancel
</a>

</form>

</div>

@endsection