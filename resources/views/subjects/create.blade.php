<form action="{{ route('subjects.store') }}" method="POST">

@csrf

<input type="text" name="subject_name" placeholder="Subject Name" class="form-control mb-2">

<input type="text" name="class" placeholder="Class" class="form-control mb-2">

<select name="teacher_id" class="form-control mb-2">

@foreach($teachers as $teacher)

<option value="{{ $teacher->teacher_id }}">
{{ $teacher->teacher_name }}
</option>

@endforeach

</select>

<button class="btn btn-success">
Save
</button>

</form>