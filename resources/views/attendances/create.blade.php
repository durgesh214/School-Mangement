<form action="{{ route('attendances.store') }}" method="POST">

@csrf

<select name="student_id" class="form-control mb-2">

@foreach($students as $student)

<option value="{{ $student->student_id }}">
{{ $student->student_name }}
</option>

@endforeach

</select>

<input type="date" name="date" class="form-control mb-2">

<select name="status" class="form-control mb-2">
<option value="Present">Present</option>
<option value="Absent">Absent</option>
</select>

<button class="btn btn-success">
Save
</button>

</form>