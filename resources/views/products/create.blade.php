<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product - First Steps Store</title>
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
            background: white;
            padding: 2rem;
        }
        .koko-store {
            font-size: 30px;
            font-weight: bold;
            color: #000;
        }
        .btn-add-to-cart {
            background-color: #000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 0;
        }
        .form-control {
            border-radius: 0;
            border: 1px solid #ddd;
        }
        .form-control:focus {
            border-color: #17a308;
            box-shadow: 0 0 0 0.25rem rgba(23, 163, 8, 0.25);
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
                <div class="product-card">
                    <h2 class="mb-4">Add New Product</h2>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-4">
                            <label for="price" class="form-label">Price ($)</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" required>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('products.index') }}" class="btn btn-outline-dark">
                                <i class="fas fa-arrow-left"></i> Back to Products
                            </a>
                            <button type="submit" class="btn btn-add-to-cart">
                                <i class="fas fa-plus"></i> Create Product
                            </button>
                        </div>
                    </form>
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