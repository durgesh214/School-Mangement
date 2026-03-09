<!DOCTYPE html>
<html>
<head>

<title>Add School</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

<h2 class="mb-4">Add School</h2>

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow-sm">

<div class="card-body">

<form action="{{ route('schools.store') }}" method="POST">

@csrf

<div class="mb-3">
<label class="form-label">School Name</label>
<input type="text" name="school_name" class="form-control" placeholder="Enter School Name">
</div>

<div class="mb-3">
<label class="form-label">Address</label>
<input type="text" name="address" class="form-control" placeholder="Enter Address">
</div>

<div class="mb-3">
<label class="form-label">Phone</label>
<input type="text" name="phone" class="form-control" placeholder="Enter Phone">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control" placeholder="Enter Email">
</div>

<div class="mb-3">
<label class="form-label">Principal Name</label>
<input type="text" name="principal_name" class="form-control" placeholder="Enter Principal Name">
</div>

<div class="d-flex justify-content-between">

<a href="{{ route('schools.index') }}" class="btn btn-secondary">
Back
</a>

<button type="submit" class="btn btn-primary">
Save
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