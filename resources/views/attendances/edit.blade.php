<form action="{{ route('attendances.update',$attendance->attendance_id) }}" method="POST">

@csrf
@method('PUT')

<select name="student_id" class="form-control mb-2">

@foreach($students as $student)

<option value="{{ $student->student_id }}"
{{ $student->student_id == $attendance->student_id ? 'selected' : '' }}>

{{ $student->student_name }}

</option>

@endforeach

</select>

<input type="date" name="date"
value="{{ $attendance->date }}"
class="form-control mb-2">

<select name="status" class="form-control mb-2">

<option value="Present" {{ $attendance->status=='Present'?'selected':'' }}>Present</option>
<option value="Absent" {{ $attendance->status=='Absent'?'selected':'' }}>Absent</option>

</select>

<button class="btn btn-primary">
Update
</button>

</form>