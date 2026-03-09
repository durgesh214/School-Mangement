@extends('layouts.app')

@section('content')

<div class="container">

<h2>Attendance List</h2>

<a href="{{ route('attendances.create') }}" class="btn btn-primary mb-3">
Add Attendance
</a>

<table class="table table-bordered">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Student</th>
<th>Date</th>
<th>Status</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($attendances as $attendance)

<tr>

<td>{{ $attendance->attendance_id }}</td>

<td>{{ $attendance->student->student_name ?? '' }}</td>

<td>{{ $attendance->date }}</td>

<td>{{ $attendance->status }}</td>

<td>

<a href="{{ route('attendances.edit',$attendance->attendance_id) }}" class="btn btn-warning btn-sm">
Edit
</a>

<form action="{{ route('attendances.destroy',$attendance->attendance_id) }}" method="POST" style="display:inline">

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