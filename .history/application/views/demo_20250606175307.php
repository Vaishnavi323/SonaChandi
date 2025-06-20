<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Collection</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            border-radius: 15px;
            overflow: hidden;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 450px;
            display: flex;
            flex-direction: column;
        }

        .card-img-top {
            height: 100%;
            object-fit: cover;
            flex-grow: 1;
        }

        .card-body {
            position: relative;
            flex-shrink: 0;
        }

        .card-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            width: 100%;
        }

        .btn-custom {
            background-color: #e9d8fd;
            color: black;
            border-radius: 20px;
            padding: 10px 30px;
            margin: 20px auto;
            display: block;
            width: fit-content;
        }

        .card-container {
            transform-style: preserve-3d;
        }

        .card-container:nth-child(odd) {
            margin-top: 50px;
        }

        .card-container:nth-child(even) {
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3 card-container">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400/FF6B6B/FFFFFF" class="card-img-top" alt="Jewelry Image">
                    <div class="card-body">
                        <p class="card-text">For the ones who told you they "didn't want anything". We know what that means.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 card-container">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400/9FA4C4/FFFFFF" class="card-img-top" alt="Jewelry Image">
                    <div class="card-body">
                        <p class="card-text">Gifts for MOM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 card-container">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400/B8A8D4/FFFFFF" class="card-img-top" alt="Jewelry Image">
                    <div class="card-body">
                        <p class="card-text">Shimmering Savings: Bestsellers at a price you'll love!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 card-container">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400/5C6B73/FFFFFF" class="card-img-top" alt="Jewelry Image">
                    <div class="card-body">
                        <p class="card-text">Discover Timeless Elegance.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-custom">More</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>