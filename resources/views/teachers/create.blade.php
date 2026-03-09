@extends('layouts.app')

@section('content')

<div class="container">

<h2>Add Teacher</h2>

<form action="{{ route('teachers.store') }}" method="POST">

@csrf

<input type="text" name="teacher_name" placeholder="Teacher Name" class="form-control mb-2">

<input type="text" name="gender" placeholder="Gender" class="form-control mb-2">

<input type="text" name="subject" placeholder="Subject" class="form-control mb-2">

<input type="text" name="phone" placeholder="Phone" class="form-control mb-2">

<input type="email" name="email" placeholder="Email" class="form-control mb-2">

<input type="number" name="salary" placeholder="Salary" class="form-control mb-2">

<input type="date" name="join_date" class="form-control mb-2">

<button class="btn btn-success">
Save
</button>

</form>

</div>

@endsection