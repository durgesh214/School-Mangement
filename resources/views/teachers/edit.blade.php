@extends('layouts.app')

@section('content')

<div class="container">

<h2>Edit Teacher</h2>

<form action="{{ route('teachers.update',$teacher->teacher_id) }}" method="POST">

@csrf
@method('PUT')

<input type="text" name="teacher_name" value="{{ $teacher->teacher_name }}" class="form-control mb-2">

<input type="text" name="gender" value="{{ $teacher->gender }}" class="form-control mb-2">

<input type="text" name="subject" value="{{ $teacher->subject }}" class="form-control mb-2">

<input type="text" name="phone" value="{{ $teacher->phone }}" class="form-control mb-2">

<input type="email" name="email" value="{{ $teacher->email }}" class="form-control mb-2">

<input type="number" name="salary" value="{{ $teacher->salary }}" class="form-control mb-2">

<input type="date" name="join_date" value="{{ $teacher->join_date }}" class="form-control mb-2">

<button class="btn btn-primary">
Update
</button>

</form>

</div>

@endsection