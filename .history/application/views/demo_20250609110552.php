<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Minimal Custom CSS -->
    <style>
        body {
            background-color: #ffffff;
            color: #000000;
        }

        .product-card {
            border: none;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            max-height: 200px;
            object-fit: contain;
            padding: 20px;
        }

        .product-card .card-body {
            text-align: center;
        }

        .product-title {
            color: #000000;
            font-size: 16px;
        }

        .product-price {
            color: #6c757d;
            /* Bootstrap's secondary color */
            font-size: 18px;
        }

        .form-control,
        .btn {
            border-color: #ced4da;
        }

        .btn-outline-secondary {
            color: #6c757d;
            border-color: #ced4da;
        }

        .breadcrumb {
            background-color: transparent;
        }

        .breadcrumb-item a {
            color: #6c757d;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #000000;
        }

        .search-bar .form-control {
            border-radius: 50px;
        }

        .search-bar .btn {
            border-radius: 50px;
            margin-left: -51px;
        }

        .navbar-brand img {
            width: 40px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="https://via.placeholder.com/40" alt="Logo"></a>
            <div class="d-flex flex-grow-1 justify-content-center search-bar">
                <input class="form-control me-2" type="search" placeholder="Search Here" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
            </div>
            <div class="d-flex">
                <button class="btn btn-outline-secondary me-2"><i class="bi bi-heart"></i></button>
                <button class="btn btn-outline-secondary me-2"><i class="bi bi-cart"></i></button>
                <button class="btn btn-outline-secondary"><i class="bi bi-person"></i></button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-4">
        <!-- Breadcrumb and Filter/Sort -->
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                        <li class="breadcrumb-item"><a href="#">GOLD COINS</a></li>
                        <li class="breadcrumb-item active" aria-current="page">2 GRAM 24 KT GOLD COIN</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-md-end">
                <div class="dropdown me-2">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown">
                        FILTER BY
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                        SORT BY
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                        <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                        <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <!-- Product Cards -->
            <div class="col">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title product-title">TWISTED RING</h6>
                        <p class="card-text product-price">$320</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title product-title">TWISTED RING</h6>
                        <p class="card-text product-price">$320</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title product-title">TWISTED RING</h6>
                        <p class="card-text product-price">$320</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title product-title">TWISTED RING</h6>
                        <p class="card-text product-price">$320</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title product-title">TWISTED RING</h6>
                        <p class="card-text product-price">$320</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title product-title">TWISTED RING</h6>
                        <p class="card-text product-price">$320</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title product-title">TWISTED RING</h6>
                        <p class="card-text product-price">$320</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title product-title">TWISTED RING</h6>
                        <p class="card-text product-price">$320</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons (for navbar icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>