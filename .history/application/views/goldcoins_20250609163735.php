<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Coins</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .coin-img {
            width: 100%;
            height: auto;
        }

        .filter-section {
            background-color: #6f42c1;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .coin-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="filter-section">
            <div class="row">
                <div class="col-md-5">
                    <select class="form-control">
                        <option>Weight</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <select class="form-control">
                        <option>Quality</option>
                    </select>
                </div>
                <div class="col-md-2 text-right">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-shopping-cart ml-2"></i>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 col-6">
                <div class="coin-card">
                    <img src="https://via.placeholder.com/150" alt="Gold Coin" class="coin-img">
                    <p>2 gram 24 KT</p>
                    <p>Rs. 20,089</p>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="coin-card">
                    <img src="<?php echo base_url('assets\products\goldcoin.png'); ?>" alt="Gold Coin" class="coin-img">
                    <p>2 gram 24 KT</p>
                    <p>Rs. 20,089</p>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="coin-card">
                    <img src="<?php echo base_url('assets\products\goldcoin.png'); ?>" alt="Gold Coin" class="coin-img">
                    <p>2 gram 24 KT</p>
                    <p>Rs. 20,089</p>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="coin-card">
                    <img src="<?php echo base_url('assets\products\goldcoin.png'); ?>" alt="Gold Coin" class="coin-img">
                    <p>2 gram 24 KT</p>
                    <p>Rs. 20,089</p>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="coin-card">
                    <img src="<?php echo base_url('assets\products\goldcoin.png'); ?>" alt="Gold Coin" class="coin-img">
                    <p>2 gram 24 KT</p>
                    <p>Rs. 20,089</p>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="coin-card">
                    <img src="<?php echo base_url('assets\products\goldcoin.png'); ?>" alt="Gold Coin" class="coin-img">
                    <p>2 gram 24 KT</p>
                    <p>Rs. 20,089</p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <button class="btn" style="background-color: #6f42c1; color: white;">More</button>
            </div>
        </div>
    </div>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>