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
    <style>
        body {
            font-family: 'Garet', sans-serif;
        }

        .top-bar {
            background-color: #fff;
            padding: 1px 0;
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
            transform: scale(1.1);
            filter: brightness(1.1);
        }

        /* Animated Nav Links */
        .nav-link {
            color: rgba(255, 255, 255, 0.92)!important;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            font-size: 19px;
            line-height: 18px;
            letter-spacing: 1.2px;
            position: relative;
            
            transition:
                color 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                filter 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            animation: fadeIn 0.7s forwards;
            background: linear-gradient(90deg, #b53fc2 0%, #fff 100%);
            background-size: 0% 2px;
            background-repeat: no-repeat;
            background-position: left bottom;
        }

        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #b53fc2 0%, #fff 100%);
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: absolute;
            left: 0;
            bottom: 0;
            color: white;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        /* Creative Heading Style */
        .navbar-brand {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: #b53fc2 !important;
            text-shadow: 0 2px 10px rgba(181, 63, 194, 0.12), 0 1px 0 #fff;
            position: relative;
            background: linear-gradient(90deg, #b53fc2 30%, #370248 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: headingGlow 2.5s infinite alternate;
        }

        @keyframes headingGlow {
            0% {
                text-shadow: 0 2px 10px rgba(194, 63, 124, 0.12), 0 1px 0 #fff;
            }

            100% {
                text-shadow: 0 4px 24px rgba(181, 63, 194, 0.25), 0 1px 0 #fff;
            }
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

        .nav-item:nth-child(10) .nav-link {
            animation-delay: 1.0s;
        }

        .nav-item:nth-child(11) .nav-link {
            animation-delay: 1.1s;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        .nav-link:hover,
        .nav-link.active {
            color: #fff !important;
            filter: drop-shadow(0 0 10px rgba(111, 66, 193, 0.7));
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            transition: transform 0.3s ease;
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
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

        /* Dropdown for Mangalsutras */
        .nav-item.dropdown:hover .mangalsutra-cards {
            display: block;
            opacity: 1;
            /* transform: translateY(0); */
        }

        .mangalsutra-cards {
            display: none;
            opacity: 0;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
            z-index: 1000;
        }

        .mangalsutra-card {
            text-align: center;
        }

        .mangalsutra-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }

        .mangalsutra-card p {
            font-family: 'Garet', sans-serif;
            font-size: 14px;
            color: #370248;
            margin-top: 10px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 30px;
            height: 30px;
            background-color: #fff;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #6f42c1;
            border-radius: 50%;
            width: 20px;
            height: 20px;
        }
    </style>
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
            <div class="collapse navbar-collapse justify-content-left" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Gold Coin</a>
                    </li>
                    
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>