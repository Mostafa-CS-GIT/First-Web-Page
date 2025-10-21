<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - First Steps Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <style>
        body {
            background-color: #31ac0c4d;
            padding-top: 20px;
        }
        .profile-card {
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
        .btn-profile {
            background-color: #000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0;
            width: 100%;
        }
        .btn-profile:hover {
            background-color: #333;
            color: white;
        }
        .btn-danger-profile {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0;
            width: 100%;
        }
        .btn-danger-profile:hover {
            background-color: #bb2d3b;
            color: white;
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
        .alert {
            border-radius: 0;
            margin-bottom: 1rem;
        }
        .section-title {
            color: #17a308;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #17a308;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="koko-store" href="{{ route('home') }}">
                <i class="fas fa-shopping-cart"> First Steps Store</i>
            </a>
            <div class="d-flex">
                <a href="{{ route('products.index') }}" class="btn btn-outline-dark me-2">
                    <i class="fas fa-box"></i> Products
                </a>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-dark">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Profile Information -->
                <div class="profile-card">
                    <h3 class="section-title">Profile Information</h3>
                    @include('profile.partials.update-profile-information-form')
                </div>

                <!-- Update Password -->
                <div class="profile-card">
                    <h3 class="section-title">Update Password</h3>
                    @include('profile.partials.update-password-form')
                </div>

                <!-- Delete Account -->
                <div class="profile-card">
                    <h3 class="section-title">Delete Account</h3>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
