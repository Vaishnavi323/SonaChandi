<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing with Filter</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Remove unwanted custom CSS, most stylings are Bootstrap-based */

        .product-card {
            transition: box-shadow 0.3s, transform 0.3s;
            text-align: center;
            border-radius: 1rem;
            overflow: hidden;
            background: #fff;
            position: relative;
        }

        .product-card img {
            height: 210px;
            object-fit: contain;
            transition: transform 0.3s;
        }

        .product-card:hover {
            box-shadow: 0 8px 30px rgba(111, 66, 193, 0.15);
            transform: translateY(-6px) scale(1.03);
            z-index: 3;
        }

        .product-hover-content {
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.4s cubic-bezier(.4, 2, .6, 1);
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            z-index: 2;
        }

        .product-card:hover .product-hover-content {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .discount-banner {
            background: linear-gradient(90deg, #eecdf2 0%, #c9a7f6 100%);
            color: #7c37a6;
            font-weight: 600;
            font-size: 0.95rem;
            border-radius: .7rem .7rem 0 0;
            padding: 0.4rem 0;
            margin-bottom: 0.3rem;
            box-shadow: 0 2px 6px rgba(156, 96, 221, 0.10);
            border-bottom: 2px solid #b53fc2;
            letter-spacing: 1px;
        }

        .add-to-cart-btn {
            background: linear-gradient(90deg, #eecdf2 0%, #b53fc2 100%);
            color: #fff;
            border: none;
            border-radius: 0.6rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-top: 0.2rem;
            box-shadow: 0 2px 5px rgba(156, 96, 221, 0.15);
            transition: background 0.2s;
        }

        .add-to-cart-btn:hover,
        .add-to-cart-btn:focus {
            background: linear-gradient(90deg, #b53fc2 0%, #eecdf2 100%);
            color: #fff;
        }

        .card-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.1rem;
            margin-bottom: 0.2rem;
            color: #6f42c1;
            font-weight: 700;
            transition: color 0.2s;
        }

        .card-text {
            color: #b53fc2;
            font-weight: 600;
            font-size: 1.1rem;
        }

        /* Fancy breadcrumb */
        .breadcrumb {
            --bs-breadcrumb-divider: '/';
            background: transparent;
            margin-bottom: 0.5rem;
        }

        .breadcrumb-item.active {
            color: #b53fc2 !important;
            font-weight: 600;
        }

        /* Filter modal - use Bootstrap only */

        /* Animation for filter modal */
        .modal.fade .modal-dialog {
            transition: transform 0.4s cubic-bezier(.4, 2, .6, 1);
            transform: translateY(-30px) scale(.95);
        }

        .modal.fade.show .modal-dialog {
            transform: translateY(0) scale(1.02);
        }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <?php include 'common/navbar.php'; ?>

    <!-- Main Content -->
    <div class="container my-4">

        <!-- Breadcrumb
         <div class="row mb-3">
            <div class="col-12 col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('User/home'); ?>" ">HOME</a></li>
                        <li class=" breadcrumb-item"><a href="<?php echo base_url('User/products'); ?>" ">COLLECTIONS</a></li>
                        <li class=" breadcrumb-item active" aria-current="page">RINGS</li>
                    </ol>
                </nav>
            </div>
        </div> -->
        <!-- Filter and Sort in one row -->
        <div class="row mb-3 align-items-center">
            <div class="col-auto ps-0">
                <button class="btn btn-outline-secondary shadow-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#filterModal">
                    <i class="bi bi-funnel"></i> Filter By
                </button>
            </div>
            <div class="col-auto ms-auto">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle rounded-pill shadow-sm" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                        SORT BY
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                        <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                        <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Filter Modal -->
        <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-4">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="filterModalLabel">Filter By</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-4">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <h6>Category</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="charms">
                                    <label class="form-check-label" for="charms">Charms (23)</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="bracelets">
                                    <label class="form-check-label" for="bracelets">Bracelets (58)</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="rings">
                                    <label class="form-check-label" for="rings">Rings (156)</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="necklace">
                                    <label class="form-check-label" for="necklace">Necklace (42)</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="earrings">
                                    <label class="form-check-label" for="earrings">Earrings (127)</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6>Material</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gold">
                                    <label class="form-check-label" for="gold">Gold</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="silver">
                                    <label class="form-check-label" for="silver">Silver</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="platinum">
                                    <label class="form-check-label" for="platinum">Platinum</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="diamond">
                                    <label class="form-check-label" for="diamond">Diamond</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6>Price</h6>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="under10k">
                                    <label class="form-check-label" for="under10k">Under ₹10k</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="10kto20k">
                                    <label class="form-check-label" for="10kto20k">₹10k to ₹20k</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="20kto30k">
                                    <label class="form-check-label" for="20kto30k">₹20k to ₹30k</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="30kto50k">
                                    <label class="form-check-label" for="30kto50k">₹30k to ₹50k</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="75kabove">
                                    <label class="form-check-label" for="75kabove">₹75k & above</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Clear</button>
                        <button type="button" class="btn rounded-pill" style="background-color:rgba(94, 53, 142, 0.53); color:#fff;">Apply</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-1">
            <!-- Product Card 1 -->
            <div class="col">
                <div class="card product-card position-relative border-0 shadow-sm h-100 overflow-hidden">
                    <div class="product-hover-content">
                        <div class="discount-banner">Flat 20% Discount</div>
                        <a href="<?php echo base_url('User/productcart'); ?>" class="btn add-to-cart-btn w-75 mx-auto shadow" style="font-size: 1rem;">Add to Cart</a>
                    </div>
                    <img src="<?php echo base_url('assets/products/product (1).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">Twisted Ring</h6>
                        <p class="card-text">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 2 -->
            <div class="col">
                <div class="card product-card position-relative border-0 shadow-sm h-100 overflow-hidden">
                    <div class="product-hover-content">
                        <div class="discount-banner">Flat 20% Discount</div>
                        <button class="btn add-to-cart-btn w-75 mx-auto shadow" style="font-size: 1rem;">Add to Cart</button>
                    </div>
                    <img src="<?php echo base_url('assets/products/product (2).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">Twisted Ring</h6>
                        <p class="card-text">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 3 -->
            <div class="col">
                <div class="card product-card position-relative border-0 shadow-sm h-100 overflow-hidden">
                    <div class="product-hover-content">
                        <div class="discount-banner">Flat 20% Discount</div>
                        <button class="btn add-to-cart-btn w-75 mx-auto shadow" style="font-size: 1rem;">Add to Cart</button>
                    </div>
                    <img src="<?php echo base_url('assets/products/product (3).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">Twisted Ring</h6>
                        <p class="card-text">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 4 -->
            <div class="col">
                <div class="card product-card position-relative border-0 shadow-sm h-100 overflow-hidden">
                    <div class="product-hover-content">
                        <div class="discount-banner">Flat 20% Discount</div>
                        <button class="btn add-to-cart-btn w-75 mx-auto shadow" style="font-size: 1rem;">Add to Cart</button>
                    </div>
                    <img src="<?php echo base_url('assets/products/product (4).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">Twisted Ring</h6>
                        <p class="card-text">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 5 -->
            <div class="col">
                <div class="card product-card position-relative border-0 shadow-sm h-100 overflow-hidden">
                    <div class="product-hover-content">
                        <div class="discount-banner">Flat 20% Discount</div>
                        <button class="btn add-to-cart-btn w-75 mx-auto shadow" style="font-size: 1rem;">Add to Cart</button>
                    </div>
                    <img src="<?php echo base_url('assets/products/product (5).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">Twisted Ring</h6>
                        <p class="card-text">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 6 -->
            <div class="col">
                <div class="card product-card position-relative border-0 shadow-sm h-100 overflow-hidden">
                    <div class="product-hover-content">
                        <div class="discount-banner">Flat 20% Discount</div>
                        <button class="btn add-to-cart-btn w-75 mx-auto shadow" style="font-size: 1rem;">Add to Cart</button>
                    </div>
                    <img src="<?php echo base_url('assets/products/product (6).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">Twisted Ring</h6>
                        <p class="card-text">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 7 -->
            <div class="col">
                <div class="card product-card position-relative border-0 shadow-sm h-100 overflow-hidden">
                    <div class="product-hover-content">
                        <div class="discount-banner">Flat 20% Discount</div>
                        <button class="btn add-to-cart-btn w-75 mx-auto shadow" style="font-size: 1rem;">Add to Cart</button>
                    </div>
                    <img src="<?php echo base_url('assets/products/product (7).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">Twisted Ring</h6>
                        <p class="card-text">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 8 -->
            <div class="col">
                <div class="card product-card position-relative border-0 shadow-sm h-100 overflow-hidden">
                    <div class="product-hover-content">
                        <div class="discount-banner">Flat 20% Discount</div>
                        <button class="btn add-to-cart-btn w-75 mx-auto shadow" style="font-size: 1rem;">Add to Cart</button>
                    </div>
                    <img src="<?php echo base_url('assets/products/product (8).png'); ?>" class="card-img-top" alt="Twisted Ring">
                    <div class="card-body">
                        <h6 class="card-title">Twisted Ring</h6>
                        <p class="card-text">$320</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>