<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <!-- Google Fonts: Cormorant Garamond and Garet -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Garet:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
</head>

<body>
    <!-- Top Bar with Search and Icons -->
    <div class="top-bar">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a class="navbar-brand me-3" href="#">
                <img src="<?php echo base_url('assets/navbar/logo.png'); ?>" alt="Logo" width="40" height="40" class="d-inline-block align-text-top rounded-circle">
            </a>
            <!-- Search Bar next to Logo (left side, wider) -->
            <div class="search-bar flex-grow-1 me-auto" style="max-width: 350px;">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Here">
                    <button class="btn" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>

            <!-- Icons on the Right -->
            <div class="d-flex align-items-center">
                <a href="#" class="icon-btn mx-2"><i class="bi bi-heart"></i></a>
                <a href="#" class="icon-btn mx-2"><i class="bi bi-cart"></i></a>
                <a href="#" class="icon-btn mx-2"><i class="bi bi-person"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar with Logo and Nav Items -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Collections</a>
                    </li>
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link px-3" href="#">Trending</a>
                        <div class="mangalsutra-cards">
                            <div class="d-flex justify-content-between align-items-center position-relative">
                                <a class="carousel-control-prev" href="#" role="button">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <div class="mangalsutra-card mx-2">
                                    <img src="<?php echo base_url('assets/navbar/Trending/ButterflyCollection.png'); ?>" alt="Layered">
                                    <p>Butterfly Collection</p>
                                </div>
                                <div class="mangalsutra-card mx-2">
                                    <img src="<?php echo base_url('assets/navbar/Trending/infinitychain.png'); ?>" alt="Modern">
                                    <p>Infinity chain</p>
                                </div>
                                <div class="mangalsutra-card mx-2">
                                    <img src="<?php echo base_url('assets/navbar/Trending/ring.png'); ?>" alt="Traditional">
                                    <p>Men's Platinum Ring</p>
                                </div>
                                <a class="carousel-control-next" href="#" role="button">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link px-3" href="#">Mangalsutras</a>
                        <div class="mangalsutra-cards">
                            <div class="d-flex justify-content-between align-items-center position-relative">
                                <a class="carousel-control-prev" href="#" role="button">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <div class="mangalsutra-card mx-2">
                                    <img src="<?php echo base_url('assets/navbar/Mangalsutras/layered.png'); ?>" alt="Layered">
                                    <p>Layered</p>
                                </div>
                                <div class="mangalsutra-card mx-2">
                                    <img src="<?php echo base_url('assets/navbar/Mangalsutras/modern.png'); ?>" alt="Modern">
                                    <p>Modern</p>
                                </div>
                                <div class="mangalsutra-card mx-2">
                                    <img src="<?php echo base_url('assets/navbar/Mangalsutras/traditional.png'); ?>" alt="Traditional">
                                    <p>Traditional</p>
                                </div>
                                <a class="carousel-control-next" href="#" role="button">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Gifting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Coins</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>