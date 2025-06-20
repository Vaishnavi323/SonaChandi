<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Similar Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <!-- Section Heading -->
        <h3 class="text-center mb-4">Similar Products</h3>

        <!-- Product Cards -->
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            <!-- Product 1 -->
            <div class="col">
                <div class="card h-100 border-0 text-center">
                    <img src="<?php echo base_url('assets/products/cart (1).png'); ?>" class="card-img-top mx-auto" alt="Twisted Ring" style="max-width: 200px;">
                    <div class="card-body p-0">
                        <h6 class="card-title mt-2">Twisted Ring</h6>
                        <p class="card-text fw-semibold">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col">
                <div class="card h-100 border-0 text-center">
                    <img src="https://via.placeholder.com/200x200.png?text=Twisted+Ring+2" class="card-img-top mx-auto" alt="Twisted Ring" style="max-width: 200px;">
                    <div class="card-body p-0">
                        <h6 class="card-title mt-2">Twisted Ring</h6>
                        <p class="card-text fw-semibold">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col">
                <div class="card h-100 border-0 text-center">
                    <img src="https://via.placeholder.com/200x200.png?text=Twisted+Ring+3" class="card-img-top mx-auto" alt="Twisted Ring" style="max-width: 200px;">
                    <div class="card-body p-0">
                        <h6 class="card-title mt-2">Twisted Ring</h6>
                        <p class="card-text fw-semibold">$320</p>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col">
                <div class="card h-100 border-0 text-center">
                    <img src="https://via.placeholder.com/200x200.png?text=Twisted+Ring+4" class="card-img-top mx-auto" alt="Twisted Ring" style="max-width: 200px;">
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