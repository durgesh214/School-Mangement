<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login to SMS Dashboard">
    <title>Login — SMS Dashboard</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="login-page">

    <div class="login-card">

        <!-- Brand -->
        <div class="login-brand">
            <span class="login-brand-name">SMS Dashboard</span>
        </div>

        <!-- Heading -->
        <div class="login-heading">
            <h1>Welcome back</h1>
            <p>Sign in to your account to continue</p>
        </div>

        
        @if (session('error'))
            <div class="login-alert error show">
                {{ session('error') }}
            </div>
        @endif

       
        <form method="POST" action="{{ route('login') }}">
        @csrf

    <div class="login-field">
        <label for="email">Email Address</label>
        <div class="login-input-wrap">
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="you@example.com" 
                value="{{ old('email') }}" 
                required 
                autofocus
            >
        </div>
        @error('email')
            <span class="login-error">{{ $message }}</span>
        @enderror
    </div>

    <div class="login-field">
        <label for="password">Password</label>
        <div class="login-input-wrap">
            <input 
                type="password" 
                id="password" 
                name="password" 
                placeholder="••••••••" 
                required
            >
        </div>

        @error('password')
            <span class="login-error">{{ $message }}</span>
        @enderror
    </div>

    <div class="login-meta">
        <label class="login-remember">
            <input type="checkbox" name="remember">
            <span>Keep me signed in</span>
        </label>
    </div>

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
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Create one</a>
            @else
                <a href="#">Contact support</a>
            @endif
        </p>

    </div>

    
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.querySelector('.login-toggle-pass');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
              
            } else {
                passwordInput.type = 'password';
                
            }
        }
    </script>

</body>
</html>