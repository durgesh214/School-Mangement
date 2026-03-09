@extends('layouts.app')

@section('content')

<div class="container">

<h2>Subject List</h2>

<a href="{{ route('subjects.create') }}" class="btn btn-primary mb-3">
Add Subject
</a>

<table class="table table-bordered">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Subject Name</th>
<th>Class</th>
<th>Teacher</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($subjects as $subject)

<tr>

<td>{{ $subject->subject_id }}</td>

<td>{{ $subject->subject_name }}</td>

<td>{{ $subject->class }}</td>

<td>{{ $subject->teacher->teacher_name ?? '' }}</td>

<td>

<a href="{{ route('subjects.edit',$subject->subject_id) }}" class="btn btn-warning btn-sm">
Edit
</a>

<form action="{{ route('subjects.destroy',$subject->subject_id) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection