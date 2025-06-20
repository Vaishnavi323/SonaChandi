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
        .product-card img {
            max-height: 200px;
            object-fit: contain;
        }

        .product-card {
            text-align: center;
            border: none;
            box-shadow: none;
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
            color: rgba(156, 96, 221, 0.72);
        }

        .filter-panel {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }

        .filter-section {
            margin-bottom: 20px;
        }

        .filter-checkbox {
            margin-bottom: 10px;
        }

        .btn-apply {
            background-color: rgba(156, 96, 221, 0.72);
            color: white;
            border: none;
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
                        <li class="breadcrumb-item"><a href="#">COLLECTIONS</a></li>
                        <li class="breadcrumb-item active" aria-current="page">RINGS</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-md-end">
                <div class="dropdown me-2">
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

        <div class="row">
            <!-- Filter Panel -->
            <div class="col-md-3">
                <div class="filter-panel">
                    <h5>Filter By</h5>
                    <div class="filter-section">
                        <h6>Category</h6>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="charms">
                            <label class="form-check-label" for="charms">Charms (23)</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="bracelets">
                            <label class="form-check-label" for="bracelets">Bracelets (58)</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="rings">
                            <label class="form-check-label" for="rings">Rings (156)</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="necklace">
                            <label class="form-check-label" for="necklace">Necklace (42)</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="earrings">
                            <label class="form-check-label" for="earrings">Earrings (127)</label>
                        </div>
                    </div>
                    <div class="filter-section">
                        <h6>Material</h6>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="gold">
                            <label class="form-check-label" for="gold">Gold</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="silver">
                            <label class="form-check-label" for="silver">Silver</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="platinum">
                            <label class="form-check-label" for="platinum">Platinum</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="diamond">
                            <label class="form-check-label" for="diamond">Diamond</label>
                        </div>
                    </div>
                    <div class="filter-section">
                        <h6>Price</h6>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="under10k">
                            <label class="form-check-label" for="under10k">Under ₹10k</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="10kto20k">
                            <label class="form-check-label" for="10kto20k">₹10k to ₹20k</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="20kto30k">
                            <label class="form-check-label" for="20kto30k">₹20k to ₹30k</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="30kto50k">
                            <label class="form-check-label" for="30kto50k">₹30k to ₹50k</label>
                        </div>
                        <div class="form-check filter-checkbox">
                            <input class="form-check-input" type="checkbox" id="75kabove">
                            <label class="form-check-label" for="75kabove">₹75k & above</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-secondary">Clear</button>
                        <button type="button" class="btn btn-apply">Apply</button>
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    <!-- Product Cards -->
                    <div class="col">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                            <div class="card-body">
                                <h6 class="card-title">TWISTED RING</h6>
                                <p class="card-text">$320</p>
                            </div>
                        </div>
                    </div>
                    <!-- Additional product cards can be added here -->
                    <div class="col">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                            <div class="card-body">
                                <h6 class="card-title">TWISTED RING</h6>
                                <p class="card-text">$320</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                            <div class="card-body">
                                <h6 class="card-title">TWISTED RING</h6>
                                <p class="card-text">$320</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                            <div class="card-body">
                                <h6 class="card-title">TWISTED RING</h6>
                                <p class="card-text">$320</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                            <div class="card-body">
                                <h6 class="card-title">TWISTED RING</h6>
                                <p class="card-text">$320</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Twisted Ring">
                            <div class="card-body">
                                <h6 class="card-title">TWISTED RING</h6>
                                <p class="card-text">$320</p>
                            </div>
                        </div>
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