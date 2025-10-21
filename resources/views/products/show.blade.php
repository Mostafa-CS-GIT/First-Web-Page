<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - First Steps Store</title>
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
            height: 300px;
            object-fit: cover;
            background-color: #17a308;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
        }
        .product-title {
            font-size: 1.5rem;
            font-weight: 500;
            margin-bottom: 1rem;
        }
        .product-price {
            font-weight: bold;
            color: #000;
            font-size: 1.5rem;
        }
        .btn-add-to-cart {
            background-color: #000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0;
        }
        .koko-store {
            font-size: 30px;
            font-weight: bold;
            color: #000;
        }
        .line-clamp {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .line-clamp-3 {
            -webkit-line-clamp: 3;
            line-clamp: 3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="koko-store" href="{{ route('products.index') }}">
                <i class="fas fa-shopping-cart"> First Steps Store</i>
            </a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card product-card">
                    <div class="product-image">
                        @if($product->image)
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid">
                        @else
                            <i class="fas fa-image fa-3x"></i>
                        @endif
                    </div>
                    <div class="card-body">
                        <h1 class="product-title">{{ $product->name }}</h1>
                        <p class="product-price mb-4">${{ number_format($product->price, 2) }}</p>
                        <div class="mb-4">
                            <h5 class="text-dark">Description</h5>
                            <p class="line-clamp line-clamp-3">{{ $product->description }}</p>
                        </div>
                        <div class="mb-4">
                            <h5 class="text-dark">Stock</h5>
                            <p>{{ $product->stock }} units available</p>
                        </div>
                        <div class=" align-items-center mt-4">
-                            <a href="{{ route('home') }}" class="btn btn-outline-dark">
-                                <i class="fas fa-arrow-left"></i> Back to Home
-                            </a>
                            @auth
                            <a href="{{ route('products.index') }}" class="btn btn-outline-dark">
                                <i class="fas fa-arrow-left"></i> Back to Products Management
                            </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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