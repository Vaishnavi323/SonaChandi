<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Subscription Section</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-image: url('assets\services\installment.png');
            background-size: cover;
            background-position: center;
            min-height: 500px;
            position: relative;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            right: 5%;
            transform: translateY(-50%);
            color: white;
            text-align: right;
        }

        .form-section {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
        }

        .btn-subscribe {
            background-color: #c8a2c8;
            color: white;
            border: none;
        }
    </style>
</head>

<body>
    <section class="hero-section d-flex align-items-center">
        <!-- Text Overlay -->
        <div class="text-overlay">
            <h1 class="display-4 fw-bold">10 + 1</h1>
            <h2 class="h4">Monthly Installment Plan</h2>
            <p class="lead">Pay 10 installments and get 100% off on 11th installment</p>
        </div>
        <!-- Form Section -->
        <div class="form-section">
            <div class="row g-2">
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Enter Monthly Amount">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Enter Mobile No.">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-subscribe w-100">Subscribe</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>