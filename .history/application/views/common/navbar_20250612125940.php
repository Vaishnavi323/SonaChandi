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

        .bg-gradient-gold-rates {
            background: linear-gradient(90deg, #370248 60%, #b53fc2 100%);
        }

        @media (max-width: 576px) {

            .bg-gradient-gold-rates strong,
            .bg-gradient-gold-rates i {
                font-size: 0.95rem;
            }

            .bg-gradient-gold-rates marquee {
                font-size: 0.95rem;
            }
        }


        .gold-rates-bar {
            background: linear-gradient(135deg, #1a1625 0%, #2d1b4e 50%, #8b3a9c 100%);
            border-bottom: 1px solid rgba(181, 63, 194, 0.3);
            position: relative;
            overflow: hidden;
        }

        .gold-rates-bar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(181, 63, 194, 0.5), transparent);
        }

        .rates-header {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 0;
            letter-spacing: 0.5px;
        }

        .header-icon {
            color: #d4af37;
            font-size: 1.3rem;
            opacity: 0.9;
        }

        .scroll-wrapper {
            overflow: hidden;
            position: relative;
            flex-grow: 1;
            height: 48px;
            display: flex;
            align-items: center;
        }

        .rates-ticker {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            color: #ffffff;
            white-space: nowrap;
            animation: smoothScroll 30s linear infinite;
            display: flex;
            align-items: center;
            font-size: 0.95rem;
        }

        @keyframes smoothScroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .rate-segment {
            display: inline-flex;
            align-items: center;
            margin-right: 45px;
            padding: 8px 18px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(212, 175, 55, 0.2);
            border-radius: 6px;
            transition: all 0.3s ease;
            backdrop-filter: blur(2px);
        }

        .rate-segment:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(212, 175, 55, 0.4);
            transform: translateY(-1px);
        }

        .metal-name {
            font-weight: 600;
            color: #d4af37;
            margin-right: 10px;
            font-size: 0.9rem;
            min-width: 65px;
            text-align: left;
        }

        .metal-price {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            color: #ffffff;
            letter-spacing: 0.3px;
        }

        .price-change {
            margin-left: 8px;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 2px;
        }

        .change-up {
            color: #4ade80;
        }

        .change-down {
            color: #f87171;
        }

        .change-neutral {
            color: #94a3b8;
        }

        .update-info {
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.9);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.15);
            margin-left: 35px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .live-indicator {
            width: 6px;
            height: 6px;
            background: #4ade80;
            border-radius: 50%;
            animation: subtlePulse 2s ease-in-out infinite;
        }

        @keyframes subtlePulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.6;
            }
        }

        .separator {
            color: rgba(255, 255, 255, 0.4);
            margin: 0 15px;
            font-weight: 300;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .rates-header {
                font-size: 0.9rem;
                padding: 10px 0;
            }

            .header-icon {
                font-size: 1.1rem;
            }

            .rate-segment {
                margin-right: 30px;
                padding: 6px 14px;
            }

            .metal-name {
                font-size: 0.85rem;
                min-width: 55px;
            }

            .metal-price {
                font-size: 0.9rem;
            }

            .update-info {
                font-size: 0.8rem;
                padding: 5px 10px;
                margin-left: 25px;
            }
        }

        @media (max-width: 576px) {
            .gold-rates-bar {
                padding: 8px;
            }

            .rates-header {
                font-size: 0.85rem;
                flex-direction: column;
                align-items: flex-start;
                gap: 6px;
                padding: 8px 0;
            }

            .scroll-wrapper {
                height: 42px;
            }

            .rates-ticker {
                font-size: 0.85rem;
                animation-duration: 35s;
            }

            .rate-segment {
                margin-right: 25px;
                padding: 5px 12px;
            }

            .metal-name {
                font-size: 0.8rem;
                min-width: 50px;
            }

            .metal-price {
                font-size: 0.85rem;
            }

            .price-change {
                font-size: 0.75rem;
            }

            .separator {
                margin: 0 10px;
            }
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            .rates-ticker {
                animation-duration: 60s;
            }

            .live-indicator {
                animation: none;
            }
        }

        @media (prefers-contrast: high) {
            .gold-rates-bar {
                background: #1a1625;
                border-bottom: 2px solid #b53fc2;
            }

            .rate-segment {
                background: rgba(255, 255, 255, 0.15);
                border: 2px solid rgba(212, 175, 55, 0.5);
            }
        }
    </style>
</head>

<body>
    <div class="gold-rates-bar">
        <div class="container-fluid d-flex align-items-center">


            <div class="scroll-wrapper">
                <div class="rates-ticker">
                    <div class="rate-segment">
                        <span class="metal-name">24K Gold</span>
                        <span class="metal-price">₹6,120/gm</span>
                        <span class="price-change change-up">
                            <i class="bi bi-arrow-up-short"></i>1.2%
                        </span>
                    </div>

                    <span class="separator">|</span>

                    <div class="rate-segment">
                        <span class="metal-name">22K Gold</span>
                        <span class="metal-price">₹5,610/gm</span>
                        <span class="price-change change-up">
                            <i class="bi bi-arrow-up-short"></i>0.8%
                        </span>
                    </div>

                    <span class="separator">|</span>

                    <div class="rate-segment">
                        <span class="metal-name">18K Gold</span>
                        <span class="metal-price">₹4,590/gm</span>
                        <span class="price-change change-down">
                            <i class="bi bi-arrow-down-short"></i>0.3%
                        </span>
                    </div>

                    <span class="separator">|</span>

                    <div class="rate-segment">
                        <span class="metal-name">Silver</span>
                        <span class="metal-price">₹75.50/gm</span>
                        <span class="price-change change-up">
                            <i class="bi bi-arrow-up-short"></i>2.1%
                        </span>
                    </div>

                    <span class="separator">|</span>

                    <div class="update-info">
                        <div class="live-indicator"></div>
                        <i class="bi bi-clock"></i>
                        Updated: 12 June 2025, 15:45 IST
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Bar -->
    <div class="bg-white border-bottom py-1">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center me-3" href="#">
                <img src="<?php echo base_url('assets/navbar/logo.png'); ?>" alt="Logo" width="40" height="40" class="rounded-circle me-2">

            </a>
            <!-- Search Bar -->
            <div class="flex-grow-1"></div>
            <form class="search-bar d-flex mx-5" style="max-width:350px;">
                <div class="input-group">
                    <input type="text" class="form-control border border-end-0" placeholder="Search Here" aria-label="Search">
                    <button class="btn border border-start-0" type="button"><i class="bi bi-search"></i></button>
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
                        <a class="nav-link  text-white px-3" href="<?php echo base_url('User/products'); ?>">Collections</a>
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