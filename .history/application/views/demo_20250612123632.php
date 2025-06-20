<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Gold Rates Display</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600&display=swap');

        .gold-rates-bar {
            background: linear-gradient(135deg, #1a1625 0%, #2d1b4e 50%, #8b3a9c 100%);
            border-bottom: 1px solid rgba(181, 63, 194, 0.3);
            position: relative;
            overflow: hidden;
        }

        .gold-rates-bar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(181, 63, 194, 0.5), transparent);
        }

        .rates-header {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 0;
            letter-spacing: 0.5px;
        }

        .header-icon {
            color: #d4af37;
            font-size: 1.3rem;
            opacity: 0.9;
        }

        .scroll-wrapper {
            overflow: hidden;
            position: relative;
            flex-grow: 1;
            height: 48px;
            display: flex;
            align-items: center;
        }

        .rates-ticker {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            color: #ffffff;
            white-space: nowrap;
            animation: smoothScroll 20s linear infinite;
            display: flex;
            align-items: center;
            font-size: 0.9rem;
        }

        @keyframes smoothScroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .rate-segment {
            display: inline-flex;
            align-items: center;
            margin-right: 30px;
            padding: 6px 14px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(212, 175, 55, 0.2);
            border-radius: 6px;
            transition: all 0.3s ease;
            backdrop-filter: blur(2px);
        }

        .rate-segment:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(212, 175, 55, 0.4);
            transform: translateY(-1px);
        }

        .metal-name {
            font-weight: 600;
            color: #d4af37;
            margin-right: 10px;
            font-size: 0.9rem;
            min-width: 65px;
            text-align: left;
        }

        .metal-price {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            color: #ffffff;
            letter-spacing: 0.3px;
        }

        .price-change {
            margin-left: 8px;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 2px;
        }

        .change-up {
            color: #4ade80;
        }

        .change-down {
            color: #f87171;
        }

        .change-neutral {
            color: #94a3b8;
        }

        .update-info {
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.9);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.15);
            margin-left: 25px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .live-indicator {
            width: 6px;
            height: 6px;
            background: #4ade80;
            border-radius: 50%;
            animation: subtlePulse 2s ease-in-out infinite;
        }

        @keyframes subtlePulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.6;
            }
        }

        .separator {
            color: rgba(255, 255, 255, 0.4);
            margin: 0 15px;
            font-weight: 300;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .rates-header {
                font-size: 0.9rem;
                padding: 10px 0;
            }

            .header-icon {
                font-size: 1.1rem;
            }

            .rate-segment {
                margin-right: 30px;
                padding: 6px 14px;
            }

            .metal-name {
                font-size: 0.85rem;
                min-width: 55px;
            }

            .metal-price {
                font-size: 0.9rem;
            }

            .update-info {
                font-size: 0.8rem;
                padding: 5px 10px;
                margin-left: 25px;
            }
        }

        @media (max-width: 576px) {
            .gold-rates-bar {
                padding: 8px;
            }

            .rates-header {
                font-size: 0.85rem;
                flex-direction: column;
                align-items: flex-start;
                gap: 6px;
                padding: 8px 0;
            }

            .scroll-wrapper {
                height: 42px;
            }

            .rates-ticker {
                font-size: 0.85rem;
                animation-duration: 35s;
            }

            .rate-segment {
                margin-right: 25px;
                padding: 5px 12px;
            }

            .metal-name {
                font-size: 0.8rem;
                min-width: 50px;
            }

            .metal-price {
                font-size: 0.85rem;
            }

            .price-change {
                font-size: 0.75rem;
            }

            .separator {
                margin: 0 10px;
            }
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            .rates-ticker {
                animation-duration: 60s;
            }

            .live-indicator {
                animation: none;
            }
        }

        @media (prefers-contrast: high) {
            .gold-rates-bar {
                background: #1a1625;
                border-bottom: 2px solid #b53fc2;
            }

            .rate-segment {
                background: rgba(255, 255, 255, 0.15);
                border: 2px solid rgba(212, 175, 55, 0.5);
            }
        }
    </style>
</head>

<body>
    <div class="gold-rates-bar">
        <div class="container-fluid d-flex align-items-center">
            <div class="scroll-wrapper">
                <marquee behavior="scroll" direction="left" scrollamount="18" class="rates-ticker" onmouseover="this.stop();" onmouseout="this.start();">
                    <div class="rate-segment">
                        <span class="metal-name">24K Gold</span>
                        <span class="metal-price">₹6,120/gm</span>
                        <span class="price-change change-up">
                            <i class="bi bi-arrow-up-short"></i>1.2%
                        </span>
                    </div>
                    <span class="separator">|</span>
                    <div class="rate-segment">
                        <span class="metal-name">22K Gold</span>
                        <span class="metal-price">₹5,610/gm</span>
                        <span class="price-change change-up">
                            <i class="bi bi-arrow-up-short"></i>0.8%
                        </span>
                    </div>
                    <span class="separator">|</span>
                    <div class="rate-segment">
                        <span class="metal-name">18K Gold</span>
                        <span class="metal-price">₹4,590/gm</span>
                        <span class="price-change change-down">
                            <i class="bi bi-arrow-down-short"></i>0.3%
                        </span>
                    </div>
                    <span class="separator">|</span>
                    <div class="rate-segment">
                        <span class="metal-name">Silver</span>
                        <span class="metal-price">₹75.50/gm</span>
                        <span class="price-change change-up">
                            <i class="bi bi-arrow-up-short"></i>2.1%
                        </span>
                    </div>
                    <span class="separator">|</span>
                    <span class="update-info">
                        <div class="live-indicator"></div>
                        <i class="bi bi-clock"></i>
                        Updated: 12 June 2025, 15:45 IST
                    </span>
                </marquee>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>