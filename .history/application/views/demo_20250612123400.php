<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Rate Marquee</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .marquee-container {
            background-color: #f8f9fa;
            padding: 10px 0;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee-content {
            display: inline-block;
            padding-left: 100%;
            animation: scroll 20s linear infinite;
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid marquee-container">
        <div class="marquee-content">
            <span class="badge bg-warning text-dark me-3">Gold Rate: ₹ 5000 per gram</span>
            <span class="badge bg-info text-dark me-3">Silver Rate: ₹ 60 per gram</span>
            <!-- Add more items as needed -->
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>