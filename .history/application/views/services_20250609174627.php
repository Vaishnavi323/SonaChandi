<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Our Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <!-- Section Heading -->
        <h3 class="text-center mb-4">Explore Our Services</h3>

        <!-- Service Section with Background Image -->
        <div class="position-relative rounded">
            <img src="<?php echo base_url('assets\services\services.png'); ?>" class="img-fluid rounded" alt="Hands Working on Ring">
            <div class="position-absolute top-50 end-0 translate-middle-y text-end pe-4">
                <h4 class="text-white fw-bold">Door Step Service<br>One Click Away</h4>
                <button class="btn text-white mt-2" style="background: linear-gradient(90deg, #6f42c1, #a855f7);">Book Visit</button>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            <!-- Card 1: Schedule Video Call -->
            <div class="col">
                <div class="card h-100 border-0 text-center">
                    <img src="<?php echo base_url('assets\services\services (1).png'); ?>" class="card-img-top mx-auto rounded" alt="Schedule Video Call" >
                    <div class="card-body p-0">
                        <button class="btn text-white mt-3" style="background: linear-gradient(90deg, #6f42c1, #a855f7); width: 200px;">Schedule Video Call</button>
                    </div>
                </div>
            </div>
            <!-- Card 2: Book Visit -->
            <div class="col">
                <div class="card h-100 border-0 text-center">
                    <img src="<?php echo base_url('assets\services\services (2).png'); ?>" class="card-img-top mx-auto rounded" alt="Book Visit">
                    <div class="card-body p-0">
                        <button class="btn text-white mt-3" style="background: linear-gradient(90deg, #6f42c1, #a855f7); width: 200px;">Book Visit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>