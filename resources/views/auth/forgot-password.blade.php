<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
</head>

<body>

<h2>Forgot Password</h2>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('password.email') }}">
@csrf

<label>Email</label><br>
<input type="email" name="email" required>

<br><br>

<button type="submit">Send Reset Link</button>

</form>

<br>

<a href="{{ route('login') }}">Back to Login</a>

</body>
</html>