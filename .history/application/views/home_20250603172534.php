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
    <!-- Custom CSS for Styling and Animations -->
    <style>
        body {
            font-family: 'Garet', sans-serif;
        }

        .top-bar {
            background-color: #fff;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
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

        .navbar {
            background-color: #370248;
            transition: background-color 0.3s ease;
        }

        .navbar-brand {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .navbar-brand img {
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .navbar-brand img:hover {
            transform: rotate(15deg) scale(1.2);
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9);
            font-family: 'Cormorant Garamond', serif;
            font-weight: 500;
            font-size: 18px;
            line-height: 16px;
            font-style: normal;

            letter-spacing: 1px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }

        /* Staggered animation for nav items */
        .nav-item:nth-child(1) .nav-link {
            animation-delay: 0.1s;
        }

        .nav-item:nth-child(2) .nav-link {
            animation-delay: 0.2s;
        }

        .nav-item:nth-child(3) .nav-link {
            animation-delay: 0.3s;
        }

        .nav-item:nth-child(4) .nav-link {
            animation-delay: 0.4s;
        }

        .nav-item:nth-child(5) .nav-link {
            animation-delay: 0.5s;
        }

        .nav-item:nth-child(6) .nav-link {
            animation-delay: 0.6s;
        }

        .nav-item:nth-child(7) .nav-link {
            animation-delay: 0.7s;
        }

        .nav-item:nth-child(8) .nav-link {
            animation-delay: 0.8s;
        }

        .nav-item:nth-child(9) .nav-link {
            animation-delay: 0.9s;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        .nav-link:hover,
        .nav-link.active {
            color: #fff !important;
            transform: rotate(2deg);
            filter: drop-shadow(0 0 10px rgba(111, 66, 193, 0.7));
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            transition: transform 0.3s ease;
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
            transform: rotate(90deg);
        }

        .icon-btn {
            color: #B53FC2;
            font-family: 'Garet', sans-serif;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .icon-btn:hover {
            transform: scale(1.15);
            color: #B53FC2;
            filter: drop-shadow(0 2px 8px rgba(181, 63, 194, 0.25)) brightness(1.1);
        }
    </style>
</head>

<body>
    <!-- Top Bar with Search and Icons -->
    <div class="top-bar">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('assets/navbar/logo.png'); ?>" alt="Logo" width="40" height="40" class="d-inline-block align-text-top rounded-circle">
            </a>
            <!-- Search Bar on the Left -->
            <div class="search-bar">
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
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Mangalsutras</a>
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