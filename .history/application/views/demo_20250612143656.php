<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Mine Plan</title>
    <!-- Bootstrap CSS v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts for bold -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #efefef;
        }

        .section1 {
            min-height: 90vh;

            background-size: cover;

            position: relative;
            overflow: hidden;
        }

        @media (max-width: 991.98px) {
            .section1 {
                min-height: 45vh;
                background-position: center;
            }
        }

        .section1-content {
            position: absolute;
            top: 50%;
            right: 3%;
            transform: translateY(-50%);
            color: #fff;
            text-align: right;
            width: 50%;
        }

        @media (max-width: 991.98px) {
            .section1-content {
                width: 90%;
                left: 50%;
                right: auto;
                transform: translate(-50%, -50%);
                text-align: center;
            }
        }

        .section1-title {
            font-family: 'Montserrat', Arial, sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: #fff;
            line-height: 1;
        }

        .section1-divider {
            border-left: 2px solid #fff;
            height: 50px;
            margin: 0 24px;
        }

        .section1-sub {
            font-size: 1.2rem;
            font-weight: 600;
            margin-top: 18px;
            color: #fff;
        }

        .subscribe-bar {
            background: #fff !important;
            border-radius: 10px !important;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04) !important;
            padding: 0.5rem 1rem !important;
            max-width: 480px !important;
            margin: -32px auto 0 auto !important;
            position: relative !important;
            z-index: 3 !important;
        }

        .btn-theme {
            background: #a088bf !important;
            color: #fff !important;
            font-weight: 700 !important;
        }

        .btn-theme:hover {
            background: #7c5fa3 !important;
            color: #fff !important;
        }

        .section2 {
            background: #fff;
            border-radius: 1.2rem;
            margin: 36px auto 0 auto;
            padding: 2.5rem 2.5rem 2rem 2.5rem;
            box-shadow: 0 4px 32px rgba(111, 66, 193, .09);
            max-width: 1100px;
        }

        @media (max-width: 767.98px) {
            .section2 {
                padding: 1.2rem 0.5rem 1.2rem 0.5rem;
            }
        }

        .calc-title {
            text-align: center;
            font-family: 'Montserrat', Arial, sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: #bbb;
            margin-bottom: 2.2rem;
            letter-spacing: .5px;
        }

        .calc-form input {
            border-radius: 0.5rem;
            border: 2px solid #e4d8f2;
            padding: 0.6rem 1.1rem;
            font-size: 1.05rem;
            font-weight: 500;
            color: #b9a0d2;
            background: #faf8fd;
        }

        .calc-form .btn-theme {
            margin-left: 0.6rem;
            padding: 0.53rem 1.45rem;
            font-size: 1.05rem;
        }

        .pie-legend {
            font-size: 0.99rem;
            color: #b53fc2;
            margin-bottom: 0.6rem;
            font-weight: 600;
        }

        .pie-label {
            fill: #fff;
            font-size: 0.97rem;
        }

        .calc-result-table td,
        .calc-result-table th {
            font-size: 1.09rem;
            padding: 0.35rem 0.7rem 0.35rem 0.2rem;
            color: #222;
        }

        .calc-result-table th {
            font-weight: 500;
            color: #6f42c1;
            background: none;
        }

        .calc-result-table tr:last-child td {
            font-weight: 600;
            color: #b53fc2;
        }

        .calc-result-highlight {
            color: #a088bf;
            font-weight: 700;
            text-align: right;
        }

        .calc-divider {
            border-top: 2px solid #e4d8f2;
            margin: 1.1rem 0;
        }

        .calc-result-table .text-purple {
            color: #a088bf !important;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include 'common/navbar.php'; ?>
    <!-- Section 1 -->
    <div class=" container-fluid p-0">
        <div class="section1 position-relative w-100" style="background: url('<?php echo base_url('assets/services/installment.png'); ?>') no-repeat left center; background-size: cover;">
            <div class="section1-content d-flex flex-column justify-content-center align-items-end h-100 px-3 px-lg-5">
                <div class="d-flex align-items-center">
                    <span class="section1-title">10 + 1</span>
                    <div class="section1-divider d-none d-md-block"></div>
                    <span class="fs-4 fw-bold ms-3 text-white" style="font-family: 'Montserrat', Arial, sans-serif;">Monthly<br>Installment<br>Plan</span>
                </div>
                <div class="section1-sub mt-3">
                    Pay 10 installments and get 100% off on<br>11th installment
                </div>
            </div>
        </div>
        <form class="subscribe-bar d-flex flex-column flex-md-row align-items-center justify-content-center shadow mt-0" style="margin-bottom: 0;">
            <input type="text" class="form-control mb-2 mb-md-0 me-md-3" placeholder="Enter Monthly Amount">
            <input type="text" class="form-control mb-2 mb-md-0 me-md-3" placeholder="Enter Mobile No.">
            <button class="btn btn-theme px-4" type="submit">Subscribe</button>
        </form>
    </div>
    <!-- Section 2 -->
    <div class="section2 container mt-5">
        <div class="calc-title">
            Gold Mine Calculator
        </div>
        <div class="row align-items-center gy-4">
            <!-- Pie and Input -->
            <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
                <form class="calc-form d-flex w-100 mb-4 justify-content-center">
                    <input type="number" class="form-control me-2" placeholder="Rs. 3500" id="monthlyAmount" min="1000" value="3500" style="max-width: 180px;">
                    <button type="button" class="btn btn-theme" id="checkBtn">Check</button>
                </form>
                <!-- Pie Chart -->
                <div class="w-100 d-flex flex-column align-items-center">
                    <svg width="220" height="220" viewBox="0 0 220 220">
                        <circle r="100" cx="110" cy="110" fill="#bca3d7" />
                        <path id="discountSlice" fill="#fff" stroke="#a088bf" stroke-width="2" />
                        <text x="105" y="80" text-anchor="middle" class="pie-label" fill="#7c37a6" font-weight="bold" font-size="0.8rem">100%</text>
                        <text x="105" y="105" text-anchor="middle" class="pie-label" fill="#7c37a6" font-weight="bold" font-size="0.8rem">Discount</text>
                        <text x="105" y="130" text-anchor="middle" class="pie-label" fill="#b53fc2" font-size="1rem" font-weight="bold" id="discountValue">Rs. 3,500</text>
                        <text x="110" y="180" text-anchor="middle" fill="#fff" font-size="0.9rem" font-weight="bold">You Pay</text>
                        <text x="110" y="198" text-anchor="middle" fill="#fff" font-size="0.9rem" font-weight="bold" id="youPayText">Rs. 35,000</text>
                    </svg>
                </div>
            </div>
            <!-- Results -->
            <div class="col-12 col-lg-6">
                <table class="table calc-result-table border-0" style="background: none;">
                    <tbody>
                        <tr>
                            <th class="fw-normal" style="width: 70%;">Your total payment<br><span class="fw-light" style="font-size: 0.99rem;">(Period of 10 months)</span></th>
                            <td class="fw-medium text-end" id="totalPay">Rs. 35,000</td>
                        </tr>
                        <tr>
                            <th class="fw-normal">100% Discount on 11th installment<br><span class="fw-light" style="font-size: 0.98rem;">(100% of 1 month installment value)</span></th>
                            <td class="fw-medium text-end" id="discountAmt">Rs. 3,500</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="calc-divider"></td>
                        </tr>
                        <tr>
                            <th class="fw-normal" style="color: #878787;">Buy any jewellery worth:<br><span class="fw-light" style="font-size: 0.98rem;">(after 11th month)</span></th>
                            <td class="calc-result-highlight text-purple" id="jewelleryWorth">Rs. 38,500</td>
                        </tr>
                        <tr>
                            <th class="fw-normal">You effectively pay</th>
                            <td class="fw-medium text-end" id="effectivePay">Rs. 35,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Pie Chart JS + Calculator Functionality -->
    <script>
        // Pie chart for 10 + 1 (10/11 is pay, 1/11 is discount)
        function updateCalculator(amount) {
            // Amount is one installment, 10x is paid, 1x is discount
            let pay = amount * 10;
            let discount = amount;
            let jewelleryWorth = pay + discount;
            // Update numbers
            document.getElementById('totalPay').innerText = "Rs. " + pay.toLocaleString();
            document.getElementById('discountAmt').innerText = "Rs. " + discount.toLocaleString();
            document.getElementById('jewelleryWorth').innerText = "Rs. " + jewelleryWorth.toLocaleString();
            document.getElementById('effectivePay').innerText = "Rs. " + pay.toLocaleString();
            document.getElementById('discountValue').innerText = "Rs. " + discount.toLocaleString();
            document.getElementById('youPayText').innerText = "Rs. " + pay.toLocaleString();

            // Pie chart slice for 1/11 (discount)
            const total = 11;
            const discountAngle = (discount / jewelleryWorth) * 360;
            const bigArc = discountAngle > 180 ? 1 : 0;
            const r = 100,
                cx = 110,
                cy = 110;
            const rad = (angle) => (angle - 90) * Math.PI / 180;
            const x2 = cx + r * Math.cos(rad(discountAngle));
            const y2 = cy + r * Math.sin(rad(discountAngle));
            let d = [
                `M ${cx} ${cy}`,
                `L ${cx} ${cy - r}`,
                `A ${r} ${r} 0 ${bigArc} 1 ${x2} ${y2}`,
                `Z`
            ].join(' ');
            document.getElementById('discountSlice').setAttribute('d', d);
        }
        // Default
        updateCalculator(3500);

        // On button click or enter
        document.getElementById('checkBtn').onclick = function() {
            let amount = parseInt(document.getElementById('monthlyAmount').value);
            if (isNaN(amount) || amount < 1) amount = 3500;
            updateCalculator(amount);
        };
        document.getElementById('monthlyAmount').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('checkBtn').click();
            }
        });
    </script>
</body>

</html>