<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Mine Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <style>
        .calculator-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
        }

        .pie-chart {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: conic-gradient(#6f42c1 10% 100%, #e9ecef 0% 100%);
            margin: 0 auto;
            position: relative;
        }

        .pie-chart::after {
            content: '';
            position: absolute;
            background: white;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            top: 20px;
            left: 20px;
        }

        .pie-chart span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #6f42c1;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php $this->load->view('common/navbar'); ?>

    
    <div class="container mt-5">
        <div class="calculator-container">
            <h2 class="text-center mb-4">Gold Mine Calculator</h2>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Rs. 3500" aria-label="Amount">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Check</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pie-chart">
                        <span>You Pay<br>Rs. 35,000</span>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="mb-1">Your total payment (Period of 10 months): <strong>Rs. 35,000</strong></p>
                    <p class="mb-1">100% Discount on 11th installment (100% of 1 month installment value): <strong>Rs. 3500</strong></p>
                    <p class="mb-1">Buy any jewelry worth (after 11th month): <strong>Rs. 38,500</strong></p>
                    <p class="mb-1">You effectively pay: <strong>Rs. 35,000</strong></p>
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