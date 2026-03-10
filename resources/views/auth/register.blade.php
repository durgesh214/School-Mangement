<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


</head>
<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card">

<div class="card-header">
Register
</div>

<div class="card-body">

<form method="POST" action="/register">
@csrf

<div class="mb-3">
<label class="form-label">Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Password</label>
<input type="password" name="password" class="form-control">
</div>

<button type="submit" class="btn btn-primary">
Register
</button>

</form>

</div>
</div>

</div>
</div>

</div>

</body>
</html>