<div class="mb-3">
<label>Student</label>

<select name="student_id" class="form-control">

@foreach($students as $student)

<option value="{{ $student->student_id }}"
@if($result->student_id == $student->student_id) selected @endif>

{{ $student->student_name }}

</option>

@endforeach

</select>
</div>
