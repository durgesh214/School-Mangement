<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login — SMS Dashboard</title>

<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="login-page">

<div class="login-card">

<div class="login-brand">
<span class="login-brand-name">SMS Dashboard</span>
</div>

<div class="login-heading">
<h1>Welcome back</h1>
<p>Sign in to your account to continue</p>
</div>

@if(session('error'))
<div class="login-alert error show">
{{ session('error') }}
</div>
@endif

<form method="POST" action="{{ route('login') }}">
@csrf

<!-- Email -->
<div class="login-field">
<label>Email Address</label>

<div class="login-input-wrap">
<input type="email" name="email" placeholder="you@example.com" required>
</div>

</div>

<!-- Password -->
<div class="login-field">
<label>Password</label>

<div class="login-input-wrap">
<input type="password" name="password" id="password" placeholder="••••••••" required>

<button class="login-toggle-pass" onclick="togglePass()" type="button">
👁
</button>

</div>
</div>

<!-- Remember + Forgot -->
<div class="login-meta">

<label class="login-remember">
<input type="checkbox" name="remember">
<span>Keep me signed in</span>
</label>

<a href="{{ route('password.request') }}" class="login-forgot">
Forgot password?
</a>

</div>

<!-- Submit -->
<button class="login-btn" type="submit">
Sign In
</button>

</form>

<div class="login-divider">
<div class="login-divider-line"></div>
<span>or</span>
<div class="login-divider-line"></div>
</div>

<p class="login-signup">
Don't have an account?
<a href="{{ route('register') }}">Create one</a>
</p>

</div>

<script>

function togglePass() {

let password = document.getElementById("password");

if(password.type === "password"){
password.type = "text";
}
else{
password.type = "password";
}

}

</script>

</body>
</html>