<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Installment Plan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .jewelry-image {
            background-image: url('assets\services\installment.png');
            /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            height: 100vh;
            position: relative;
        }

        .offer-text {
            position: absolute;
            top: 20%;
            right: 10%;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .subscription-form {
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 500px;
        }
    </style>
</head>

<body>
    <div class="jewelry-image" style="background-image: url('<?php echo base_url('assets/services/installment.png'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offer-text">
                    <h1>10 + 1</h1>
                    <h2>Monthly Installment Plan</h2>
                    <p>Pay 10 installments and get 100% off on 11th installment</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="subscription-form">
                        <div class="form-group">
                            <label for="monthlyAmount">Enter Monthly Amount</label>
                            <input type="text" class="form-control" id="monthlyAmount" placeholder="Enter Amount">
                        </div>
                        <div class="form-group">
                            <label for="mobileNo">Enter Mobile No.</label>
                            <input type="text" class="form-control" id="mobileNo" placeholder="Enter Mobile No.">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>