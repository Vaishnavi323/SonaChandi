<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #E6D6F5;">
    <!-- Collection Section -->
    <section class="py-5">
        <div class="container">
            <!-- Heading -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h1 class="fw-bold" style="color: #5E358E; font-size: 2.5rem;">Collection</h1>
                </div>
            </div>
            <div class="row position-relative" style="min-height: 500px;">
                <!-- Image 1 (Left) -->
                <div class="col-md-4 text-center position-absolute" style="left: 0; top: 50px;">
                    <div style="width: 100%; max-width: 250px; margin: 0 auto;">
                        <img src="https://via.placeholder.com/250x350?text=Image+1" class="img-fluid rounded-3" alt="Jewelry Image 1">
                    </div>
                </div>
                <!-- Image 2 (Center) with Background Shape -->
                <div class="col-md-4 text-center position-absolute start-50 translate-middle-x">
                    <div class="rounded-3 position-absolute start-50 translate-middle-x" style="background-color: #D3C1E8; width: 300px; height: 400px; z-index: 1;"></div>
                    <div style="width: 100%; max-width: 250px; margin: 0 auto; position: relative; z-index: 2;">
                        <img src="https://via.placeholder.com/250x350?text=Image+2" class="img-fluid rounded-3" alt="Jewelry Image 2">
                    </div>
                </div>
                <!-- Image 3 (Right), Text, and Button -->
                <div class="col-md-4 text-center position-absolute end-0" style="top: 50px;">
                    <div style="width: 100%; max-width: 250px; margin: 0 auto;">
                        <img src="https://via.placeholder.com/250x350?text=Image+3" class="img-fluid rounded-3 mb-4" alt="Jewelry Image 3">
                    </div>
                    <p class="mb-4" style="color: #5E358E;">
                        Discover your perfect piece from our stunning collection of women's jewellery.
                    </p>
                    <button class="btn text-white px-4 py-2 rounded-3" style="background-color: #5E358E;">Explore Now</button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>