<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Gold Rates Animated Bar -->
    <div class="gold-rates-bar py-1 border-bottom">
        <div class="container-fluid d-flex align-items-center overflow-hidden">
            <span class="gold-icon me-2">
                <i class="bi bi-currency-dollar"></i>
            </span>
            <strong class="me-2 d-none d-md-inline" style="color: #fff; letter-spacing: 1px;">Daily Gold Rates</strong>
            <div class="gold-rates-roller flex-grow-1">
                <div class="gold-rates-roller-track">
                    <span>
                        <i class="bi bi-arrow-right-short"></i>
                        24K Gold: <span class="rate-highlight">₹6,120/gm</span>
                        <i class="bi bi-dot"></i>
                        22K Gold: <span class="rate-highlight">₹5,610/gm</span>
                        <i class="bi bi-dot"></i>
                        Silver: <span class="rate-highlight">₹75/gm</span>
                        <i class="bi bi-dot"></i>
                        Updated: 12 June 2025
                        <!-- Duplicate to make seamless scroll -->
                        <i class="bi bi-arrow-right-short"></i>
                        24K Gold: <span class="rate-highlight">₹6,120/gm</span>
                        <i class="bi bi-dot"></i>
                        22K Gold: <span class="rate-highlight">₹5,610/gm</span>
                        <i class="bi bi-dot"></i>
                        Silver: <span class="rate-highlight">₹75/gm</span>
                        <i class="bi bi-dot"></i>
                        Updated: 12 June 2025
                    </span>
                </div>
            </div>
        </div>
    </div>

    <style>
        .gold-rates-bar {
            background: linear-gradient(90deg, #370248 70%, #b53fc2 100%);
            box-shadow: 0 2px 8px rgba(181, 63, 194, 0.10);
            position: relative;
            z-index: 10;
        }

        .gold-icon {
            background: linear-gradient(135deg, #FFD700 60%, #FFF8DC 100%);
            color: #b53fc2;
            border-radius: 50%;
            padding: 0.5em;
            display: flex;
            align-items: center;
            font-size: 1.3rem;
            box-shadow: 0 2px 8px rgba(255, 215, 0, 0.08);
            animation: shimmer 2s infinite linear;
        }

        @keyframes shimmer {
            0% {
                filter: brightness(1) drop-shadow(0 0 0 #FFD700);
            }

            50% {
                filter: brightness(1.3) drop-shadow(0 0 6px #FFD700);
            }

            100% {
                filter: brightness(1) drop-shadow(0 0 0 #FFD700);
            }
        }

        .gold-rates-roller {
            overflow: hidden;
            width: 100%;
            position: relative;
            min-width: 0;
        }

        .gold-rates-roller-track {
            display: flex;
            white-space: nowrap;
            animation: gold-scroll 25s linear infinite;
        }

        .gold-rates-roller-track span {
            display: flex;
            align-items: center;
            font-size: 1.07rem;
            color: #ffe2fd;
            font-family: 'Cormorant Garamond', serif;
            text-shadow: 0 1px 3px rgba(181, 63, 194, 0.08);
            letter-spacing: 0.5px;
        }

        .rate-highlight {
            color: #FFD700;
            font-weight: bold;
            text-shadow: 0 0 8px #fff2ac, 0 2px 8px #b53fc2;
            position: relative;
            animation: sparkle 2.5s infinite linear;
        }

        @keyframes gold-scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes sparkle {

            0%,
            100% {
                filter: brightness(1.1);
            }

            60% {
                filter: brightness(1.4) drop-shadow(0 0 8px #FFD700);
            }

            80% {
                filter: brightness(1.1);
            }
        }

        @media (max-width: 576px) {
            .gold-rates-bar strong {
                display: none !important;
            }

            .gold-rates-roller-track span {
                font-size: 0.95rem;
            }

            .gold-icon {
                font-size: 1.1rem;
            }
        }
    </style>
</body>

</html>