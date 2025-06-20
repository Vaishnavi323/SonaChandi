<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom CSS for Animations -->
    <style>
        .navbar {
            transition: background-color 0.3s ease;
        }

        .navbar-brand img {
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #6f42c1 !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #6f42c1;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            transition: transform 0.3s ease;
        }

        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
            transform: rotate(90deg);
        }

        .icon-btn {
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .icon-btn:hover {
            transform: scale(1.2);
            color: #6f42c1;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/40" alt="Logo" width="40" height="40" class="d-inline-block align-text-top rounded-circle">
            </a>
            <!-- Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark px-3" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-3" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-3" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-3" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-3" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-3" href="#">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-3" href="#">Collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-3" href="#">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-3" href="#">Mangalsutras</a>
                    </li>
                </ul>
            </div>
            <!-- Icons on the Right -->
            <div class="d-flex align-items-center">
                <a href="#" class="icon-btn text-dark mx-2"><i class="bi bi-search"></i></a>
                <a href="#" class="icon-btn text-dark mx-2"><i class="bi bi-calendar"></i></a>
                <a href="#" class="icon-btn text-dark mx-2"><i class="bi bi-heart"></i></a>
                <a href="#" class="icon-btn text-dark mx-2"><i class="bi bi-cart"></i></a>
                <a href="#" class="icon-btn text-dark mx-2"><i class="bi bi-person"></i></a>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>