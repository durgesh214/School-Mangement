@extends('layouts.app')

@section('content')

<div class="container">

<h2>Exam List</h2>

<a href="{{ route('exams.create') }}" class="btn btn-primary mb-3">Add Exam</a>

<table class="table table-bordered">

<thead>
<tr>
<th>ID</th>
<th>Exam Name</th>
<th>Class</th>
<th>Exam Date</th>
<th>Action</th>
</tr>
</thead>

<tbody>

@foreach($exams as $exam)

<tr>
<td>{{ $exam->exam_id }}</td>
<td>{{ $exam->exam_name }}</td>
<td>{{ $exam->class }}</td>
<td>{{ $exam->exam_date }}</td>

<td>

<a href="{{ route('exams.edit',$exam->exam_id) }}" class="btn btn-warning btn-sm">Edit</a>

<form action="{{ route('exams.destroy',$exam->exam_id) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">Delete</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection