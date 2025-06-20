<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6b48ff, #2e1065);
            color: white;
            font-family: Arial, sans-serif;
        }

        .footer {
            padding: 40px 0;
        }

        .footer h5 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .footer p {
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .footer a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            font-size: 0.9rem;
        }

        .footer a:hover {
            color: #d1d1d1;
        }

        .social-icons a {
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .contact-info p {
            margin-bottom: 10px;
            font-size: 0.9rem;
        }

        .contact-info i {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- First Column: Description and Social Icons -->
                <div class="col-12 col-md-4 mb-4">
                    <h5>Jiva</h5>
                    <p>
                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Ut Vel Mi Rutrum, Lobortis Dolor Nec, Feugiat Sapien.
                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-circle"></i></a>
                    </div>
                </div>

                <!-- Second Column: Quick Links -->
                <div class="col-12 col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Catalog</a>
                </div>

                <!-- Third Column: Contact Us -->
                <div class="col-12 col-md-4 mb-4">
                    <h5>Contact Us</h5>
                    <div class="contact-info">
                        <p><i class="bi bi-telephone"></i> 424-947-8877</p>
                        <p><i class="bi bi-envelope"></i> luminary@gmail.com</p>
                        <p><i class="bi bi-geo-alt"></i> 9256 Abigail Forges, Sao Tome And Principe</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Icons for Social and Contact Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap JS (Optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>