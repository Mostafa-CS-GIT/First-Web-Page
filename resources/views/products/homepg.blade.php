<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Steps Store - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #31ac0c4d;
            padding-top: 20px;
        }
        .product-card {
            border: none;
            transition: transform 0.2s;
            margin-bottom: 20px;
        }
        .product-image {
            height: 200px;
            object-fit: cover;
            background-color: #17a308;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
        }
        .product-title {
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            height: 48px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .product-price {
            font-weight: bold;
            color: #000;
            font-size: 1.2rem;
        }
        .btn-add-to-cart {
            background-color: #000;
            color: white;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 0;
        }
        .koko-store {
            font-size: 30px;
            font-weight: bold;
            color: #000;
        }
        .line-clamp,
        .line-clamp-var {
          display: -webkit-box;
          -webkit-box-orient: vertical;
          overflow: hidden;
        }
        .line-clamp-1 { -webkit-line-clamp: 1; line-clamp: 1; }
        .line-clamp-2 { -webkit-line-clamp: 2; line-clamp: 2; }
        .line-clamp-3 { -webkit-line-clamp: 3; line-clamp: 3; }
        .line-clamp-4 { -webkit-line-clamp: 4; line-clamp: 4; }
        .line-clamp, .line-clamp-var {
          text-overflow: ellipsis;
          word-break: break-word;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="koko-store" href="{{ route('home') }}">
                <i class="fas fa-shopping-cart"> First Steps Store</i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">    
                <ul class="navbar-nav me-auto">
                </ul>
                <div class="d-flex">
                    @auth
                    <a href="{{ route('products.index') }}" class="btn btn-outline-dark me-2">
                            <i class="fas fa-store"></i> Manage Products
                        </a>
                        <a href="{{ route('profile.edit') }}" class="btn btn-outline-dark me-2">
                            <i class="fas fa-user"></i> Account
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-dark">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-outline-dark">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-12 time-date">
                <div class="koko-store">
                    Products
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="card product-card">
                    <div class="product-image">
                        @if($product->image)
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid h-100 w-100 object-fit-cover">
                        @else
                            <i class="fas fa-image fa-3x"></i>
                        @endif
                    </div>
                    <div class="card-body">
                        <h5 class="product-title">{{ $product->name }}</h5>
                        <p class="product-price">${{ number_format($product->price, 2) }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-add-to-cart">
                            <i class="fas fa-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
        </div> <!-- /.container -->

    <footer class="bg-light text-dark mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h5 class="mb-1">First Steps Store</h5>
                    <p class="mb-0 small">Quality products at great prices.</p>
                </div>
                <div class="col-md-3">
                    <h6 class="mb-1">Contact</h6>
                    <p class="small mb-0">support@kokostore.local</p>
                </div>
            </div>
        </div>
        <div class="text-center py-2" style="background:#111;color:#fff;">
            © {{ date('Y') }} First Steps Store
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>