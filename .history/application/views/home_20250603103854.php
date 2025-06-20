<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Store - Responsive Navbar</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --purple-gradient: linear-gradient(135deg, #8B5A8C 0%, #6B4C93 100%);
            --gold-color: #FFD700;
            --light-purple: rgba(255, 255, 255, 0.1);
        }

        body {
            background: var(--purple-gradient);
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .navbar-custom {
            background: var(--purple-gradient);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            margin: 15px;
            padding: 15px 25px;
            box-shadow: 0 8px 32px rgba(139, 90, 140, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .navbar-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }

        .navbar-custom:hover::before {
            left: 100%;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: white !important;
            font-weight: bold;
            font-size: 1.5rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            color: var(--gold-color) !important;
            transform: scale(1.05);
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: var(--gold-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 215, 0, 0.7);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(255, 215, 0, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 215, 0, 0);
            }
        }

        .navbar-brand:hover .brand-icon {
            transform: rotate(360deg);
            background: #FFA500;
        }

        .search-container {
            position: relative;
            max-width: 400px;
            margin: 0 auto;
        }

        .search-input {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            color: white;
            padding: 10px 45px 10px 20px;
            width: 100%;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--gold-color);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
            transform: scale(1.02);
        }

        .search-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--gold-color);
            border: none;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            background: #FFA500;
            transform: translateY(-50%) scale(1.1);
        }

        .top-icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .icon-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .icon-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gold-color);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .icon-btn:hover {
            color: #333;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 215, 0, 0.4);
        }

        .icon-btn:hover::before {
            left: 0;
        }

        .nav-menu {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 10px;
            margin-top: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-link-custom {
            color: white !important;
            padding: 12px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            display: inline-block;
            margin: 0 5px;
        }

        .nav-link-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--gold-color), #FFA500);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .nav-link-custom:hover {
            color: #333 !important;
            transform: translateY(-2px);
        }

        .nav-link-custom:hover::before {
            left: 0;
        }

        .nav-link-custom.active {
            background: var(--gold-color);
            color: #333 !important;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar-custom {
                margin: 10px;
                padding: 15px;
            }

            .search-container {
                max-width: 100%;
                margin: 15px 0;
            }

            .top-icons {
                justify-content: center;
                margin: 15px 0;
            }

            .nav-menu {
                text-align: center;
            }

            .nav-link-custom {
                display: block;
                margin: 5px 0;
            }
        }

        /* Animation classes */
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-in {
            animation: slideIn 0.6s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-50px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar-custom fade-in">
        <div class="container-fluid">
            <!-- Top Row -->
            <div class="row w-100 align-items-center">
                <!-- Brand -->
                <div class="col-lg-3 col-md-4 col-sm-12 mb-3 mb-md-0">
                    <a href="#" class="navbar-brand slide-in">
                        <div class="brand-icon">
                            <i class="bi bi-gem" style="color: #333; font-size: 1.2rem;"></i>
                        </div>
                        Jewelry Store
                    </a>
                </div>

                <!-- Search Bar -->
                <div class="col-lg-6 col-md-4 col-sm-12 mb-3 mb-md-0">
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search Here...">
                        <button class="search-btn">
                            <i class="bi bi-search" style="color: #333;"></i>
                        </button>
                    </div>
                </div>

                <!-- Top Icons -->
                <div class="col-lg-3 col-md-4 col-sm-12 mb-3 mb-md-0">
                    <div class="top-icons">
                        <a href="#" class="icon-btn" title="Calendar">
                            <i class="bi bi-calendar3"></i>
                        </a>
                        <a href="#" class="icon-btn" title="Favorites">
                            <i class="bi bi-heart"></i>
                        </a>
                        <a href="#" class="icon-btn" title="Shopping Cart">
                            <i class="bi bi-bag"></i>
                        </a>
                        <a href="#" class="icon-btn" title="Profile">
                            <i class="bi bi-person"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation Menu -->
            <div class="row w-100">
                <div class="col-12">
                    <div class="nav-menu">
                        <div class="d-flex flex-wrap justify-content-center align-items-center">
                            <a href="#" class="nav-link-custom active">Home</a>
                            <a href="#" class="nav-link-custom">About</a>
                            <a href="#" class="nav-link-custom">Categories</a>
                            <a href="#" class="nav-link-custom">Services</a>
                            <a href="#" class="nav-link-custom">Gallery</a>
                            <a href="#" class="nav-link-custom">Offers</a>
                            <a href="#" class="nav-link-custom">Collections</a>
                            <a href="#" class="nav-link-custom">Trending</a>
                            <a href="#" class="nav-link-custom">Mangalsutras</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Demo Content -->
    <div class="container-fluid mt-4">
        <div class="text-center text-white">
            <h1 class="display-4 mb-4" style="color: var(--gold-color);">Welcome to Our Jewelry Store</h1>
            <p class="lead">Discover our exquisite collection of fine jewelry</p>
        </div>
    </div>

    <!-- Bootstrap 5 JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // Add interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll for navigation links
            document.querySelectorAll('.nav-link-custom').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remove active class from all links
                    document.querySelectorAll('.nav-link-custom').forEach(l => l.classList.remove('active'));

                    // Add active class to clicked link
                    this.classList.add('active');
                });
            });

            // Search functionality
            const searchInput = document.querySelector('.search-input');
            const searchBtn = document.querySelector('.search-btn');

            searchBtn.addEventListener('click', function() {
                const searchTerm = searchInput.value.trim();
                if (searchTerm) {
                    alert(`Searching for: ${searchTerm}`);
                }
            });

            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    searchBtn.click();
                }
            });

            // Add hover effects to icons
            document.querySelectorAll('.icon-btn').forEach(icon => {
                icon.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px) scale(1.1)';
                });

                icon.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
</body>

</html>