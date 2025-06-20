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
        <div class="row section">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?php echo base_url('assets\Home\Collection1.png'); ?>" class="card-img-top" alt="Engagement Rings">
                    <div class="card-body">
                        <h5 class="card-title section-title">Engagement Rings Collection</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur. In purus vitae rutrum risus et fringilla phasellus ipsum eget. Id sagittis ac turpis ultrices non. Ultrices eu sit faucibus turpis. Mi suspendisse aliquet augue purus mauris egestas pharetra in nulla. Viverra.
                        </p>
                        <a href="#" class="btn btn-custom">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="<?php echo base_url('assets\Home\Collection2.png'); ?>" class="card-img-top" alt="Wedding Special">
                    <div class="card-body">
                        <h5 class="card-title section-title">Wedding Special Collection</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur. In purus vitae rutrum risus et fringilla phasellus ipsum eget. Id sagittis ac turpis ultrices non. Ultrices eu sit faucibus turpis. Mi suspendisse aliquet augue purus mauris egestas pharetra in nulla. Viverra.
                        </p>
                        <a href="#" class="btn btn-custom">Explore Now</a>
                    </div>
                </div>
            </div>
            <img src="https://via.placeholder.com/50" class="flower-icon" alt="Flower Icon">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>