<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Garet:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Garet', sans-serif;
        }

        .navbar-brand,
        .nav-link {
            font-family: 'Cormorant Garamond', serif;
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 2px;
            background: linear-gradient(90deg, #b53fc2 30%, #370248 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 2rem;
        }

        .nav-link {
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: 1px;
            position: relative;
        }

        .nav-link.active,
        .nav-link:hover {
            color: #b53fc2 !important;
        }

        /* Gradient underline effect */
        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #b53fc2 0%, #fff 100%);
            transition: width 0.3s;
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .navbar {
            background-color: #370248;
        }

        .icon-btn {
            color: rgba(83, 44, 134, 1);
            font-size: 1rem;
            transition: transform 0.2s;
        }

        .icon-btn:hover {
            transform: scale(1.15);
            color: #B53FC2;
            filter: drop-shadow(0 2px 8px rgba(181, 63, 194, 0.25)) brightness(1.1);
        }

        .search-bar {
            max-width: 300px;
        }

        .search-bar .input-group {
            border-radius: 20px;
            overflow: hidden;
            border: 2px solid #B53FC2;
            box-shadow: 0 2px 5px rgba(111, 66, 193, 0.2);
        }

        .search-bar .form-control {
            font-family: 'Cormorant Garamond', serif;
            font-size: 14px;
            border: none;
            box-shadow: none;
        }

        .search-bar .btn {
            background-color: #fff;
            border: none;
            color: #6f42c1;
        }

        .search-bar .form-control {
            border-radius: 2rem 0 0 2rem;
        }

        .search-bar .btn {
            border-radius: 0 2rem 2rem 0;
            color: #b53fc2;
            background: #fff;
            border: 1px solid #b53fc2;
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <div class="bg-white border-bottom py-1">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center me-3" href="#">
                <img src="<?php echo base_url('assets/navbar/logo.png'); ?>" alt="Logo" width="40" height="40" class="rounded-circle me-2">

            </a>
            <!-- Search Bar -->
            <form class="search-bar d-flex flex-grow-1 mx-3" style="max-width:350px;">
                <div class="input-group">
                    <input type="text" class="form-control border border-primary border-end-0" placeholder="Search Here" aria-label="Search">
                    <button class="btn border border-primary border-start-0" type="button"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <!-- Icons -->
            <div class="d-flex align-items-center">
                <a href="#" class="icon-btn px-1"><i class="bi bi-shop"></i></a>
                <a href="#" class="icon-btn px-1"><i class="bi bi-heart"></i></a>
                <a href="#" class="icon-btn px-1"><i class="bi bi-cart"></i></a>
                <a href="#" class="icon-btn px-1"><i class="bi bi-person"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link text-white px-3" href="<?php echo base_url('User/home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white px-3" href="<?php echo base_url('User/home'); ?>#about-us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white px-3" href="<?php echo base_url('User/collections'); ?>">Collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white px-3" href="<?php echo base_url('User/goldcoins'); ?>">Gold Coin</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link  text-white px-3 dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu  text-white dropdown-menu-end" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url('User/services/repair'); ?>">Categories</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('User/services/custom'); ?>">Gallery</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('User/services/exchange'); ?>">Offers</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('User/services/appraisal'); ?>">Trending</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('User/services/appraisal'); ?>">Mangalsutras</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>