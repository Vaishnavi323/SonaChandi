<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond Bracelet</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    
</head>

<body>
    <!-- Navbar -->
    <?php include 'common/navbar.php'; ?>

    <div class="container my-4">
        <div class="row">
            <!-- Left: Product Images -->
            <div class="col-md-6 mb-4">
                <div class="row">
                    <!-- First row: two small images side by side -->
                    <div class="col-6 mb-2 text-center">
                        <img src="<?php echo base_url('assets/products/cart (1).png'); ?>" alt="Diamond Bracelet 1" class="img-fluid">
                    </div>
                    <div class="col-6 mb-2 text-center">
                        <img src="<?php echo base_url('assets/products/cart (3).png'); ?>" alt="Diamond Bracelet 2" class="img-fluid">
                    </div>
                    <!-- Second row: one large image centered -->
                    <div class="col-12 text-center">
                        <img src="<?php echo base_url('assets/products/cart (2).png'); ?>" alt="Diamond Bracelet Main" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Right: Product Details -->
            <div class="col-md-6">
                <h2 class="fw-bold" style="font-family: 'Cormorant Garamond', serif; color: #420A5C !important;">Diamond Bracelet</h2>
                <p class="fs-4 fw-semibold">40,000 $ <span class="text-decoration-line-through text-muted">45,000 $</span></p>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur</p>
                <div class="d-flex align-items-center mb-3">
                    <div class="text-warning">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <span class="ms-2 text-muted">40 (56)</span>
                    <a href="#" class="ms-2 text-muted text-decoration-none">WRITE A REVIEW</a>
                </div>

                <!-- Metal and Size Selection -->
                <p class="fw-semibold">METAL: GOLD</p>
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <button class="btn btn-outline-secondary btn-sm">5.9 in</button>
                    <button class="btn btn-outline-secondary btn-sm">6.3 in</button>
                    <button class="btn btn-outline-secondary btn-sm">7.1 in</button>
                    <button class="btn btn-outline-secondary btn-sm">7.4 in</button>
                    <button class="btn btn-outline-secondary btn-sm">8.3 in</button>
                    <button class="btn btn-outline-secondary btn-sm">8.5 in</button>
                </div>

                <!-- Buttons -->
                <button class="btn text-white mb-3" style="background: linear-gradient(90deg, #6f42c1, #a855f7); width: 200px;">Add to Cart</button>
                <div class="mb-3">
                    <a href="#" class="text-muted text-decoration-none"><span class="me-1">♥</span>Save to Wishlist</a>
                </div>

                <!-- Smart Gift Section -->
                <div class="border rounded p-3 mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <span class="me-2">🎁</span>
                        <span class="fw-semibold">Smart Gift</span>
                    </div>
                    <p class="text-muted small">Lorem ipsum dolor sit amet consectetur. Sed commodo pellentesque arcu tristique et morbi.</p>
                    <button class="btn btn-outline-secondary w-100">Send as a Gift</button>
                </div>

                <!-- Product Detail and Size Guide -->
                <div class="border-top pt-2">
                    <a href="#" class="d-flex justify-content-between text-decoration-none text-muted">
                        <span>PRODUCT DETAIL</span>
                        <span>+</span>
                    </a>
                </div>
                <div class="border-top pt-2">
                    <a href="#" class="d-flex justify-content-between text-decoration-none text-muted">
                        <span>SIZE GUIDE</span>
                        <span>-</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Similar Products Section -->

    <div class="container-fluid my-4 py-4" style="background: linear-gradient(to bottom, #EFDEF5 0%, #fff 100%); border-radius: 16px;">
        <!-- Section Heading -->
        <h3 class="text-center mb-4" 
                <h2 class="fw-bold" style="font-family: 'Cormorant Garamond', serif; color: #420A5C !important;">Similar Products</h3>

        <!-- Product Cards -->
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center mx-0">
            <!-- Product 1 -->
            <div class="col px-2">
                <div class="card h-100 border-0 text-center shadow-none bg-transparent">
                    <img src="<?php echo base_url('assets/products/similarproducts (1).png'); ?>" class="card-img-top mx-auto" alt="Twisted Ring" style="max-width: 200px;">
                    <div class="card-body p-0">
                        <h6 class="card-title mt-2">Twisted Ring</h6>
                        <p class="card-text fw-semibold">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col px-2">
                <div class="card h-100 border-0 text-center shadow-none bg-transparent">
                    <img src="<?php echo base_url('assets/products/similarproducts (2).png'); ?>" class="card-img-top mx-auto" alt="Twisted Ring" style="max-width: 200px;">
                    <div class="card-body p-0">
                        <h6 class="card-title mt-2">Twisted Ring</h6>
                        <p class="card-text fw-semibold">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col px-2">
                <div class="card h-100 border-0 text-center shadow-none bg-transparent">
                    <img src="<?php echo base_url('assets/products/similarproducts (3).png'); ?>" class="card-img-top mx-auto" alt="Twisted Ring" style="max-width: 200px;">
                    <div class="card-body p-0">
                        <h6 class="card-title mt-2">Twisted Ring</h6>
                        <p class="card-text fw-semibold">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col px-2">
                <div class="card h-100 border-0 text-center shadow-none bg-transparent">
                    <img src="<?php echo base_url('assets/products/similarproducts (4).png'); ?>" class="card-img-top mx-auto" alt="Twisted Ring" style="max-width: 200px;">
                    <div class="card-body p-0">
                        <h6 class="card-title mt-2">Twisted Ring</h6>
                        <p class="card-text fw-semibold">$320</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- More Button -->
        <div class="text-center mt-4">
            <button class="btn btn-outline-secondary rounded-pill">More</button>
        </div>
    </div>



    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>