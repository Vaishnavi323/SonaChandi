<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Coins</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f9f7fb;
        }

        .filter-section {
            background: #fff;
            color: #6f42c1;
            padding: 1.3rem 1.5rem 1.1rem 1.5rem;
            border-radius: 1.2rem;
            margin-bottom: 28px;
            box-shadow: 0 2px 16px rgba(156, 96, 221, 0.09);
        }

        .filter-label {
            font-weight: 700;
            color: #b53fc2;
            font-size: 1.15rem;
            letter-spacing: 1px;
            margin-bottom: 0.8rem;
        }

        .styled-select {
            border: 2px solid #b53fc2;
            border-radius: 2rem;
            padding: 0.6rem 1.6rem 0.6rem 1.2rem;
            background: linear-gradient(90deg, #eecdf2 0%, #f7eefa 100%);
            color: #6f42c1;
            font-weight: 600;
            font-size: 1.05rem;
            transition: border-color .2s, box-shadow .2s;
            margin-right: 0.8rem;
        }

        .styled-select:focus {
            border-color: #6f42c1;
            box-shadow: 0 2px 8px rgba(156, 96, 221, 0.13);
        }

        .filter-icons {
            font-size: 1.45rem;
            color: #b53fc2;
            background: #f7eefa;
            border-radius: 50%;
            padding: 0.35rem 0.6rem;
            margin-left: 0.4rem;
            margin-top: -2px;
            transition: background 0.2s, color 0.2s;
        }

        .filter-icons:hover {
            background: #b53fc2;
            color: #fff;
        }

        .coin-card {
            border: none;
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 2px 10px rgba(156, 96, 221, .08);
            transition: box-shadow 0.3s, transform 0.3s;
            overflow: hidden;
            min-height: 340px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding-bottom: 0;
            margin-bottom: 0.5rem;
        }

        .coin-card:hover {
            box-shadow: 0 8px 30px rgba(111, 66, 193, 0.17);
            transform: translateY(-6px) scale(1.03);
            z-index: 2;
        }

        .coin-img {
            width: 100%;
            height: 120px;
            object-fit: contain;
            margin-top: 18px;
            transition: transform 0.3s;
        }

        .coin-card:hover .coin-img {
            transform: scale(1.11) ;
        }

        .discount-banner {
            background: linear-gradient(90deg, #EECDF2 0%, #C9A7F6 100%);
            color: #7c37a6;
            font-weight: 600;
            font-size: 0.97rem;
            border-radius: .7rem .7rem 0 0;
            padding: 0.4rem 0;
            text-align: center;
            box-shadow: 0 2px 6px rgba(156, 96, 221, 0.10);
            border-bottom: 2px solid #b53fc2;
            letter-spacing: 1px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            opacity: 0;
            transform: translateY(-100%);
            transition: all 0.3s cubic-bezier(.4, 2, .6, 1);
            z-index: 1;
        }

        .coin-card:hover .discount-banner {
            opacity: 1;
            transform: translateY(0);
        }

        .card-details {
            padding: 1.3rem 1.1rem 1.2rem 1.1rem;
            background: transparent;
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            position: relative;
            z-index: 2;
        }

        .coin-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.06rem;
            color: #6f42c1;
            font-weight: 600;
            margin-bottom: .1rem;
        }

        .coin-price {
            color: #b53fc2;
            font-weight: 700;
            font-size: 1.09rem;
            margin-bottom: .3rem;
        }

        .add-to-cart-btn {
            width: 100%;
            background: linear-gradient(90deg, #eecdf2 0%, #b53fc2 100%);
            color: #fff;
            border: none;
            border-radius: 0.7rem;
            font-weight: 600;
            margin-top: .4rem;
            margin-bottom: .2rem;
            box-shadow: 0 2px 6px rgba(156, 96, 221, 0.09);
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.33s cubic-bezier(.4, 2, .6, 1);
            font-size: 1rem;
            letter-spacing: .5px;
        }

        .coin-card:hover .add-to-cart-btn {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive for 4-in-row grid */
        @media (min-width: 1200px) {
            .col-xl-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }
        }

        @media (max-width: 1199.98px) {
            .col-lg-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }
        }

        @media (max-width: 991.98px) {
            .col-md-4 {
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
            }
        }

        @media (max-width: 767.98px) {
            .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (max-width: 575.98px) {
            .col-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('User/home'); ?>">HOME</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('User/goldcoins'); ?>">COLLECTIONS</a></li>
                        <li class="breadcrumb-item active" aria-current="page">GOLD COINS</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="filter-section mb-4">

            <div class="row align-items-center">
                <div class="col-12 d-flex flex-wrap align-items-center">
                    <div class="filter-label mr-3 mb-2 mb-md-0">Filter By</div>
                    <select class="styled-select mr-3 mb-2 mb-md-0" aria-label="Weight">
                        <option selected disabled>Weight</option>
                        <option value="2g">2g</option>
                        <option value="5g">5g</option>
                        <option value="10g">10g</option>
                    </select>
                    <select class="styled-select" aria-label="Quality">
                        <option selected disabled>Quality</option>
                        <option value="24kt">24 KT</option>
                        <option value="22kt">22 KT</option>
                    </select>
                </div>
                <div class="col-12 col-md-7 d-flex align-items-center justify-content-md-end justify-content-start">
                    <!-- <span>
                        <i class="bi bi-heart filter-icons"></i>
                        <i class="bi bi-cart3 filter-icons"></i>
                    </span> -->
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Only 4 per row on large screens, fully responsive -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2 d-flex">
                <div class="coin-card w-100">
                    <div class="discount-banner">Flat 20% Discount</div>
                    <img src="<?php echo base_url('assets/products/goldcoin.png'); ?>" alt="Gold Coin" class="coin-img">
                    <div class="card-details">
                        <div class="coin-title">2 gram 24 KT</div>
                        <div class="coin-price">Rs. 20,089</div>
                        <button class="btn add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex">
                <div class="coin-card w-100">
                    <div class="discount-banner">Flat 20% Discount</div>
                    <img src="<?php echo base_url('assets/products/goldcoin.png'); ?>" alt="Gold Coin" class="coin-img">
                    <div class="card-details">
                        <div class="coin-title">2 gram 24 KT</div>
                        <div class="coin-price">Rs. 20,089</div>
                        <button class="btn add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex">
                <div class="coin-card w-100">
                    <div class="discount-banner">Flat 20% Discount</div>
                    <img src="<?php echo base_url('assets/products/goldcoin.png'); ?>" alt="Gold Coin" class="coin-img">
                    <div class="card-details">
                        <div class="coin-title">2 gram 24 KT</div>
                        <div class="coin-price">Rs. 20,089</div>
                        <button class="btn add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex">
                <div class="coin-card w-100">
                    <div class="discount-banner">Flat 20% Discount</div>
                    <img src="<?php echo base_url('assets/products/goldcoin.png'); ?>" alt="Gold Coin" class="coin-img">
                    <div class="card-details">
                        <div class="coin-title">2 gram 24 KT</div>
                        <div class="coin-price">Rs. 20,089</div>
                        <button class="btn add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <button class="btn" style="background-color: #6f42c1; color: white; border-radius: 2rem; font-weight: 600; letter-spacing: .6px;">
                    More
                </button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>