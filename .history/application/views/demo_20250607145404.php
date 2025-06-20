<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #F5F0FA;">
    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <!-- Left Arrow -->
                <button class="btn position-absolute start-0 top-50 translate-middle-y" style="background-color: #5E358E; color: white; border-radius: 50%; width: 40px; height: 40px; z-index: 1; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.2)';" onmouseout="this.style.transform='scale(1)';">←</button>
                <!-- Testimonial Card 1 -->
                <div class="col-md-4 text-center mb-4">
                    <div class="rounded-3 p-4" style="background: linear-gradient(160deg, #5E358E 0%, #8B6BB3 100%); transform: rotate(-5deg); animation: bounce 1s ease-in-out;">
                        <p class="text-white mb-4">“Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                        </div>
                        <p class="text-white mb-0"><strong>Preston Murphy</strong></p>
                    </div>
                </div>
                <!-- Testimonial Card 2 (Hidden on smaller screens) -->
                <div class="col-md-4 text-center mb-4 d-none d-md-block">
                    <div class="rounded-3 p-4" style="background: linear-gradient(135deg, #5E358E 0%, #8B6BB3 100%); animation: bounce 1s ease-in-out;">
                        <p class="text-white mb-4">“Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                        </div>
                        <p class="text-white mb-0"><strong>Preston Murphy</strong></p>
                    </div>
                </div>
                <!-- Testimonial Card 3 -->
                <div class="col-md-4 text-center mb-4">
                    <div class="rounded-3 p-4" style="background: linear-gradient(135deg, #5E358E 0%, #8B6BB3 100%); transform: rotate(5deg); animation: bounce 1s ease-in-out;">
                        <p class="text-white mb-4">“Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                            <span class="text-warning">★</span>
                        </div>
                        <p class="text-white mb-0"><strong>Preston Murphy</strong></p>
                    </div>
                </div>
                <!-- Right Arrow -->
                <button class="btn position-absolute end-0 top-50 translate-middle-y" style="background-color: #5E358E; color: white; border-radius: 50%; width: 40px; height: 40px; z-index: 1; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.2)';" onmouseout="this.style.transform='scale(1)';">→</button>
            </div>
        </div>
    </section>

    <!-- Inline Animation Styles -->
    <style>
        @keyframes bounce {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>