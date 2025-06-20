<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Collection</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .card {
            border: none;
            margin-bottom: 20px;
        }

        .card-img-top {
            border-radius: 0;
        }

        .btn-custom {
            background-color: #6c757d;
            color: white;
        }

        .section-title {
            color: #6c757d;
        }

        .flower-icon {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="<?php echo base_url('assets/Home/collection.png'); ?>" class="flower-icon" alt="Flower Icon">
        <!-- First row -->
        <div class="row section align-items-center">
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/Home/Collection1.png'); ?>" class="img-fluid" alt="Engagement Rings">
            </div>
            <div class="col-md-6">
                <h5 class="section-title">Engagement Rings Collection</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur. In purus vitae rutrum risus et fringilla phasellus ipsum eget. Id sagittis ac turpis ultrices non. Ultrices eu sit faucibus turpis. Mi suspendisse aliquet augue purus mauris egestas pharetra in nulla. Viverra.
                </p>
                <a href="#" class="btn btn-custom">Explore Now</a>
            </div>
        </div>
        <!-- Second row  -->
        <div class="row section align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="<?php echo base_url('assets/Home/Collection2.png'); ?>" class="img-fluid" alt="Wedding Special">
            </div>
            <div class="col-md-6 order-md-1">
                <h5 class="section-title">Wedding Special Collection</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur. In purus vitae rutrum risus et fringilla phasellus ipsum eget. Id sagittis ac turpis ultrices non. Ultrices eu sit faucibus turpis. Mi suspendisse aliquet augue purus mauris egestas pharetra in nulla. Viverra.
                </p>
                <a href="#" class="btn btn-custom">Explore Now</a>
            </div>
        </div>

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>