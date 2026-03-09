<!DOCTYPE html>
<html>
<head>

<title>Edit School</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f3f4f6;
}

.card{
border-radius:12px;
}

</style>

</head>

<body>

<div class="container mt-5">

<h2 class="mb-4">Edit School</h2>

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow-sm">

<div class="card-body">

<form action="{{ route('schools.update',$school->school_id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">School Name</label>
<input type="text" name="school_name" value="{{ $school->school_name }}" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Address</label>
<input type="text" name="address" value="{{ $school->address }}" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Phone</label>
<input type="text" name="phone" value="{{ $school->phone }}" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" value="{{ $school->email }}" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Principal Name</label>
<input type="text" name="principal_name" value="{{ $school->principal_name }}" class="form-control">
</div>

<div class="d-flex justify-content-between">

<a href="{{ route('schools.index') }}" class="btn btn-secondary">
Back
</a>

<button type="submit" class="btn btn-success">
Update
</button>

</div>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>