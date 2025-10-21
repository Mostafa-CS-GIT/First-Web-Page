<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - First Steps Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #31ac0c4d;
            padding-top: 20px;
        }
        .login-card {
            border: none;
            transition: transform 0.2s;
            margin-bottom: 20px;
            background: white;
            padding: 2rem;
        }
        .koko-store {
            font-size: 30px;
            font-weight: bold;
            color: #000;
        }
        .btn-login {
            background-color: #000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0;
            width: 100%;
        }
        .form-control {
            border-radius: 0;
            border: 1px solid #ddd;
            padding: 0.75rem;
        }
        .form-control:focus {
            border-color: #17a308;
            box-shadow: 0 0 0 0.25rem rgba(23, 163, 8, 0.25);
        }
        .forgot-link {
            color: #17a308;
            text-decoration: none;
        }
        .forgot-link:hover {
            color: #138206;
            text-decoration: underline;
        }
        .alert {
            border-radius: 0;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="koko-store" href="{{ route('home') }}">
                <i class="fas fa-shopping-cart"> First Steps Store</i>
            </a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login-card">
                    <h2 class="text-center mb-4">Login to Your Account</h2>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-login">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </button>
                        </div>

                        <div class="text-center">
                            @if (Route::has('password.request'))
                                <a class="forgot-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            @endif
                        </div>

                        <hr class="my-4">

                        <div class="text-center">
                            <p class="mb-0">Don't have an account? 
                                <a href="{{ route('register') }}" class="forgot-link">Register here</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
