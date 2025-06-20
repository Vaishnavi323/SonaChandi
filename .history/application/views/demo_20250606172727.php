<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Brand Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .banner {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }

        .btn-custom {
            background-color: #6c757d;
            color: white;
        }

        .section-title {
            color: #6c757d;
            margin: 20px 0;
        }

        .brand-store {
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="row banner">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets\Home\newcollection.png'); ?>" class="img-fluid" alt="Jewelry Collection">
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center" style="background-color: #e9d8fd;">
                    <div>
                        <h3>Explore Our Latest Pendant & Rings Collection</h3>
                        <button class="btn btn-custom">Explore Now</button>
                    </div>
                </div>
            </div>

            <h2 class="text-center section-title brand-store">Brand Store</h2>

            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets\Home\brand\brand1.png'); ?>" class="img-fluid" alt="Shaya Jewelry">
                    <h4 class="text-center">The Wedding Edit</h4>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo base_url('assets\Home\brand\brand2.png'); ?>" class="img-fluid" alt="Everyday Jewelry">
                            <h5 class="text-center">Pure Love Everyday</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo base_url('assets\Home\brand\brand2.png'); ?>" class="img-fluid" alt="Everyday Jewelry">
                            <h5 class="text-center">Pure Love Everyday</h5>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>