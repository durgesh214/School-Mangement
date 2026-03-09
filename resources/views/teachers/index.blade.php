@extends('layouts.app')

@section('content')

<div class="container">

<h2>Teacher List</h2>

<a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">
Add Teacher
</a>

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Name</th>
<th>Gender</th>
<th>Subject</th>
<th>Phone</th>
<th>Email</th>
<th>Salary</th>
<th>Join Date</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($teachers as $teacher)

<tr>

<td>{{ $teacher->teacher_id }}</td>
<td>{{ $teacher->teacher_name }}</td>
<td>{{ $teacher->gender }}</td>
<td>{{ $teacher->subject }}</td>
<td>{{ $teacher->phone }}</td>
<td>{{ $teacher->email }}</td>
<td>{{ $teacher->salary }}</td>
<td>{{ $teacher->join_date }}</td>

<td>

<a href="{{ route('teachers.edit',$teacher->teacher_id) }}" class="btn btn-warning btn-sm">
Edit
</a>

<form action="{{ route('teachers.destroy',$teacher->teacher_id) }}" method="POST" style="display:inline">

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