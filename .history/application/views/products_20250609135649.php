<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing with Filter</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .product-card img {
            max-height: 200px;
            object-fit: contain;
        }

        .product-card {
            text-align: center;
        }

        .navbar-brand img {
            width: 40px;
        }

        .search-bar {
            max-width: 500px;
        }

        .search-bar .form-control {
            border-radius: 50px;
            border: 1px solid #ced4da;
        }

        .search-bar .btn {
            border-radius: 50px;
            margin-left: -51px;
        }

        .breadcrumb {
            background-color: transparent;
        }

        .card-text {
            color: rgba(156, 96, 221, 0.58);
        }

        .filter-modal .modal-content {
            border-radius: 0;
        }

        .filter-modal .modal-header {
            border-bottom: none;
        }

        .filter-modal .modal-footer {
            border-top: none;
        }

        .filter-section {
            margin-bottom: 20px;
        }

        .filter-checkbox {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets\navbar\logo.png'); ?>" alt="Logo"></a>
            <div class="d-flex flex-grow-1 justify-content-center search-bar">
                <input class="form-control me-2" type="search" placeholder="Search Here" aria-label="Search">
                <button class="btn" type="submit"><i class="bi bi-search"></i></button>
            </div>
            <div class="d-flex">
                <button class="btn  me-2"><i class="bi bi-heart"></i></button>
                <button class="btn  me-2"><i class="bi bi-cart"></i></button>
                <button class="btn "><i class="bi bi-person"></i></button>
            </div>
        </div>
    </nav>


    </div>
    </nav>
    <div class="d-flex">
        <button class="btn btn-outline-secondary me-2" data-bs-toggle="modal" data-bs-target="#filterModal"><i class="bi bi-funnel"></i> Filter By</button>

    </div>

    

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
        </div>

        <!-- Product Grid -->
        <!-- Product Grid -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <!-- Product Card -->
            <div class="col">
                <div class="card product-card border-0 shadow-none">
                    <img src="<?php echo base_url('assets\products\product (1).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">TWISTED RING</h6>
                        <p class="card-text ">$320</p>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col">
                <div class="card product-card border-0 shadow-none">
                    <img src="<?php echo base_url('assets\products\product (2).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">TWISTED RING</h6>
                        <p class="card-text ">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 3 -->
            <div class="col">
                <div class="card product-card border-0 shadow-none">
                    <img src="<?php echo base_url('assets\products\product (3).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">TWISTED RING</h6>
                        <p class="card-text ">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 4 -->
            <div class="col">
                <div class="card product-card border-0 shadow-none">
                    <img src="<?php echo base_url('assets\products\product (4).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">TWISTED RING</h6>
                        <p class="card-text ">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 5 -->
            <div class="col">
                <div class="card product-card border-0 shadow-none">
                    <img src="<?php echo base_url('assets\products\product (5).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">TWISTED RING</h6>
                        <p class="card-text ">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 6 -->
            <div class="col">
                <div class="card product-card border-0 shadow-none">
                    <img src="<?php echo base_url('assets\products\product (6).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">TWISTED RING</h6>
                        <p class="card-text ">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 7 -->
            <div class="col">
                <div class="card product-card border-0 shadow-none">
                    <img src="<?php echo base_url('assets\products\product (7).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">TWISTED RING</h6>
                        <p class="card-text ">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 8 -->
            <div class="col">
                <div class="card product-card border-0 shadow-none">
                    <img src="<?php echo base_url('assets\products\product (8).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">TWISTED RING</h6>
                        <p class="card-text ">$320</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>