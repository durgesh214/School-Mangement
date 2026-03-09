@extends('layouts.app')

@section('content')

<div class="container mt-4">

<h2 class="mb-3">Results List</h2>

<a href="{{ route('results.create') }}" class="btn btn-primary mb-3">Add Result</a>

<table class="table table-bordered table-striped">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>Student</th>
<th>Exam</th>
<th>Subject</th>
<th>Marks</th>
<th>Grade</th>
<th>Action</th>
</tr>
</thead>

<tbody>

@foreach($results as $result)

<tr>
<td>{{ $result->result_id }}</td>
<td>{{ $result->student_id }}</td>
<td>{{ $result->exam_id }}</td>
<td>{{ $result->subject_id }}</td>
<td>{{ $result->marks }}</td>
<td>{{ $result->grade }}</td>

<td>

<a href="{{ route('results.edit',$result->result_id) }}" 
class="btn btn-warning btn-sm">Edit</a>

<form action="{{ route('results.destroy',$result->result_id) }}" 
method="POST" style="display:inline-block">

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