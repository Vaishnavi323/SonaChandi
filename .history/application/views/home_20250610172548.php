<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom Styles (if any) -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Garet&display=swap">
    <style>
        body {
            font-family: 'Garet', sans-serif;
        }

        .chatbot-btn,
        .send-btn {
            background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);
            color: #fff;
        }

        .chatbot-btn:hover,
        .send-btn:hover {
            background: linear-gradient(90deg, #6d28d9 0%, #a259e6 100%);
        }

        .chat-logo {
            width: 40px;
            height: 40px;
        }

        .brand-title,
        .section-title,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Cormorant Garamond', serif;
            color: #420A5C !important;
            font-size: 2.5rem !important;
        }

        .modal-content {
            border-radius: 1.5rem;
            backdrop-filter: blur(20px);
            background-color: rgba(255, 255, 255, 0.95);
        }

        .message-incoming {
            background-color: #f1f1f1;
            border-radius: 1rem;
            padding: 0.8rem 1rem;
            margin-bottom: 1rem;
            max-width: 75%;
        }

        .message-outgoing {
            background-color: #6C3B9B;
            color: white;
            border-radius: 1rem;
            padding: 0.8rem 1rem;
            margin-bottom: 1rem;
            max-width: 75%;
            margin-left: auto;
        }

        .timestamp {
            font-size: 0.8rem;
            color: #6c757d;
            text-align: right;
        }

        .card-img-top {
            object-fit: cover;
            height: 100%;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include 'common/navbar.php'; ?>

    <!-- Carousel Section -->
    <div id="carouselExample" class="carousel slide mb-5">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/Home/screen1.png'); ?>" class="d-block w-100" alt="screen1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/Home/screen2.png'); ?>" class="d-block w-100" alt="screen2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/Home/screen3.png'); ?>" class="d-block w-100" alt="screen3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Chatbot Button -->
    <div class="position-fixed bottom-0 end-0 p-4">
        <button class="chatbot-btn btn rounded-pill d-flex align-items-center px-3 py-2"
            data-bs-toggle="modal" data-bs-target="#chatbotModal">
            <img src="<?php echo base_url('assets/Home/chatbot-icon.png'); ?>" alt="Logo" class="chat-logo me-2">
            <span>Ask Question</span>
        </button>
    </div>

    <!-- Modal for Chatbot -->
    <div class="modal fade" id="chatbotModal" tabindex="-1" aria-labelledby="chatbotModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header border-0 bg-light">
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?php echo base_url('assets/Home/chatbot-icon.png'); ?>" alt="Logo" class="chat-logo">
                        <h5 class="modal-title fs-3" id="chatbotModalLabel">Welcome to Jiva</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body chat-body px-3">
                    <div class="message-incoming mb-2">
                        Lorem ipsum dolor sit amet consectetur. Cursus sagittis enim mi placerat odio aliquam eleifend. Fermentum sem convallis.
                        <div class="timestamp">Today 12:00 PM</div>
                    </div>
                    <div class="message-outgoing mb-2">
                        Lorem ipsum dolor sit
                        <div class="timestamp">Today 12:01 PM</div>
                    </div>
                    <div class="message-incoming">
                        Lorem ipsum dolor sit amet consectetur. Cursus sagittis enim mi placerat odio aliquam eleifend. Fermentum sem convallis.
                        <div class="timestamp">Today 12:01 PM</div>
                    </div>
                </div>
                <div class="modal-footer border-0 bg-transparent">
                    <div class="input-group">
                        <input type="text" class="form-control rounded-start-pill" placeholder="Message">
                        <button class="send-btn btn rounded-end-pill" type="button">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Catalogue Section -->
    <section class="py-4">
        <div class="container text-center">
            <h2 class="mb-5 fw-bold">Catalogue</h2>
            <div class="row justify-content-center">
                <?php
                $catalogues = [
                    ["Rings", "image (6).png"],
                    ["Nose Pins", "image (5).png"],
                    ["Earring", "image (1).png"],
                    ["Bangles", "image (2).png"],
                    ["Necklace", "image (3).png"],
                    ["Anklet", "image (4).png"],
                ];
                foreach ($catalogues as $item): ?>
                    <div class="col-4 col-md-2 mb-4">
                        <div class="mx-auto" style="width: 100px; height: 100px;">
                            <img src="<?php echo base_url('assets/Home/catloge/' . $item[1]); ?>"
                                class="rounded-circle w-100 h-100 object-fit-cover" alt="<?= $item[0] ?>">
                        </div>
                        <p class="mt-2 text-center text-dark"><?= $item[0] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-0 bg-light-purple" style="background-color: #D2BDEB;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1 p-4">
                    <h2 class="fw-bold mb-4">About Us</h2>
                    <p class="text-justify text-secondary">
                        Lorem ipsum dolor sit amet consectetur. Cursus sagittis enim mi placerat odio aliquam eleifend. Fermentum sem convallis magna magna porttitor eu. Vitae sodales mauris sed neque du vulputate porta. Ut neque cursus purus risus. Bibendum est amet turpis.
                    </p>
                </div>
                <div class="col-md-6 order-md-2 text-center">
                    <img src="<?php echo base_url('assets/Home/aboutus.png'); ?>" class="img-fluid" alt="Person">
                </div>
            </div>
        </div>
    </section>

    <!-- Bracelet Collection Section -->
    <section class="py-5" style="background: linear-gradient(45deg,rgb(145, 105, 187) 0%, #FFFFFF 100%);">
        <div class="container">
            <h2 class="fw-bold mb-3 text-center">Bracelet Collection</h2>
            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <div class="mx-auto" style="width: 400px; height: 500px;">
                        <img src="<?php echo base_url('assets/Home/Braclet.png'); ?>" class="rounded-3 w-100 h-100 object-fit-cover" alt="Bracelet">
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-4 text-secondary">
                        Discover our stunning collection of bracelets, crafted to perfection for every style and moment, from elegant solitaires and dazzling diamond bands to modern statement pieces and classic gold rings. Each bracelet is designed to add a touch of sophistication and charm to your jewelry collection, making it perfect for gifting or personal indulgence. Explore our exquisite range and find the perfect piece that resonates with your unique style and personality.
                    </p>
                    <div class="d-flex justify-content-center">
                        <button class="btn text-white px-4 py-2 rounded-3" style="background-color: #5E358E;">View Collection</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Women's Happiness Section -->
    <section class="py-5" style="background-color: #E6D6F5;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center mb-3">
                    <h1 class="fw-bold" style="color: #5E358E; font-size: 3rem;">Celebrate Women's Happiness</h1>
                </div>
                <p class="mb-4 text-center text-purple">
                    Celebrate your unique style with our exquisite women's jewellery collection.<br> From timeless gold and diamond pieces
                </p>
                <div class="col-md-4 d-flex flex-column align-items-center justify-content-center mb-4">
                    <div class="mx-auto" style="max-width: 300px; margin-top: 120px;">
                        <img src="<?php echo base_url('assets/Home/Group 3.png'); ?>" class="img-fluid rounded-3" alt="Jewelry Image 1">
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center justify-content-center mb-4">
                    <div class="mx-auto" style="max-width: 300px;">
                        <img src="<?php echo base_url('assets/Home/Group 2.png'); ?>" class="img-fluid rounded-3" alt="Jewelry Image 2">
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-start mb-4">
                    <div class="mx-auto" style="max-width: 300px;">
                        <img src="<?php echo base_url('assets/Home/Group 1.png'); ?>" class="img-fluid rounded-3 mb-4" alt="Jewelry Image 3">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn text-white px-4 py-2 rounded-3" style="background-color: #5E358E;">Explore Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Collection Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="<?php echo base_url('assets/Home/Collection1.png'); ?>" class="img-fluid" alt="Engagement Rings">
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <h5 class="mb-4 section-title" style="color:rgba(66, 10, 92, 0.76);">Engagement Rings Collection</h5>
                    <p>Lorem ipsum dolor sit amet consectetur. In purus vitae rutrum risus et fringilla phasellus ipsum eget. Id sagittis ac turpis ultrices non. Ultrices eu sit faucibus turpis. Mi suspendisse aliquet augue purus mauris egestas pharetra in nulla. Viverra.</p>
                    <div>
                        <button class="btn text-white px-4 py-2 rounded-3" style="background-color: #5E358E;">Explore Now</button>
                    </div>
                </div>
            </div>
            <div class="row align-items-center flex-md-row-reverse">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="<?php echo base_url('assets/Home/Collection2.png'); ?>" class="img-fluid" alt="Wedding Special">
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <h5 class="mb-4 section-title">Wedding Special Collection</h5>
                    <p>Lorem ipsum dolor sit amet consectetur. In purus vitae rutrum risus et fringilla phasellus ipsum eget. Id sagittis ac turpis ultrices non. Ultrices eu sit faucibus turpis. Mi suspendisse aliquet augue purus mauris egestas pharetra in nulla. Viverra.</p>
                    <div>
                        <button class="btn text-white px-4 py-2 rounded-3" style="background-color: #5E358E;">Explore Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section>
        <div class="container">
            <div class="row banner rounded-4 overflow-hidden align-items-center mb-5" style="background: rgba(66, 10, 92, 0.38);">
                <div class="col-md-6 p-0">
                    <img src="<?php echo base_url('assets/Home/newcollection.png'); ?>" class="img-fluid w-100 h-100 object-fit-cover rounded-start-4" alt="Jewelry Collection">
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center py-5">
                    <div class="text-center px-3">
                        <h3 class="fw-bold mb-4">Explore Our Latest Pendant & Rings Collection</h3>
                        <button class="btn text-white px-4 py-2 rounded-3" style="background-color: #5E358E;">Explore Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Store Section -->
    <section>
        <div class="container py-5">
            <h2 class="text-center section-title brand-store mb-5">Brand Store</h2>
            <div class="row g-4 align-items-center justify-content-center mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="<?php echo base_url('assets/Home/brand/brand1.png'); ?>" class="img-fluid shadow" alt="Shaya Jewelry">
                </div>
                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <img src="<?php echo base_url('assets/Home/brand/brand2.png'); ?>" class="img-fluid shadow" alt="Everyday Jewelry">
                        </div>
                        <div class="col-12">
                            <img src="<?php echo base_url('assets/Home/brand/brand3.png'); ?>" class="img-fluid shadow" alt="Special Jewelry">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 align-items-center justify-content-center mb-4">
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="<?php echo base_url('assets/Home/brand/image 54.png'); ?>" class="img-fluid shadow" alt="Brand 1">
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="<?php echo base_url('assets/Home/brand/image 56.png'); ?>" class="img-fluid shadow" alt="Brand 2">
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="<?php echo base_url('assets/Home/brand/image 57.png'); ?>" class="img-fluid shadow" alt="Brand 3">
                </div>
            </div>
            <div class="row text-center">
                <?php
                $brandImages = ["image 33.png", "image 34.png", "image 35.png", "image 36.png"];
                foreach ($brandImages as $img): ?>
                    <div class="col-md-3 mb-3">
                        <div class="card border-0 shadow" style="border-radius: 20px;">
                            <img src="<?php echo base_url('assets/Home/brand/' . $img); ?>" class="card-img-top rounded-top-4" alt="Jewelry Image">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="d-flex m-4 justify-content-center">
                <button class="btn text-white px-4 py-2 rounded-3" style="background-color: #5E358E;">More</button>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>

</html>