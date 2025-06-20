<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">

    <style>
        /* General Styles */
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

        p {
            color: #715454 !important;
            text-align: justify;
            font-size: 1rem;
        }

        body {
            font-family: 'Garet', sans-serif;
        }

        /* Enhanced Chatbot Button */
        .chatbot-fab-btn {
            background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);
            color: #fff;
            border: none;
            outline: none;
            border-radius: 50%;
            box-shadow: 0 4px 24px rgba(140, 68, 202, 0.30), 0 2px 4px rgba(106, 36, 165, 0.08);
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: transform 0.2s, box-shadow 0.2s;
            z-index: 1050;
        }

        .chatbot-fab-btn:hover,
        .chatbot-fab-btn:focus {
            transform: translateY(-4px) scale(1.06) rotate(-6deg);
            background: linear-gradient(90deg, #6d28d9 0%, #a259e6 100%);
            box-shadow: 0 8px 32px rgba(140, 68, 202, 0.40);
        }

        .chatbot-fab-btn .chat-logo {
            width: 34px;
            height: 34px;
            filter: drop-shadow(0 1px 4px rgba(66, 10, 92, 0.13));
        }

        .chatbot-fab-btn .btn-label {
            position: absolute;
            left: -170px;
            top: 50%;
            transform: translateY(-50%) scale(0.95);
            background: #fff;
            color: #6d28d9;
            border-radius: 20px;
            padding: 9px 28px 9px 26px;
            box-shadow: 0 2px 18px rgba(140, 68, 202, 0.07);
            font-size: 1.1rem;
            font-weight: 700;
            opacity: 0;
            pointer-events: none;
            transition: opacity .21s, left .22s;
        }

        .chatbot-fab-btn:hover .btn-label,
        .chatbot-fab-btn:focus .btn-label {
            opacity: 1;
            left: -210px;
            pointer-events: auto;
        }

        /* Chatbot Modal Styles (Glassmorphism + Modern) */
        .modal-content {
            border-radius: 1.5rem;
            backdrop-filter: blur(22px);
            background: rgba(255, 255, 255, 0.27);
            border: 1.5px solid rgba(162, 89, 230, 0.18);
            box-shadow: 0 8px 36px rgba(140, 68, 202, 0.12);
            overflow: hidden;
        }

        .modal-header {
            background: linear-gradient(90deg, #e9d8fd 0%, #f3e8ff 100%);
            border-bottom: none;
            border-radius: 1.5rem 1.5rem 0 0;
            padding-bottom: 0.5rem;
        }

        .chat-header {
            display: flex;
            align-items: center;
            gap: 13px;
            color: #6C3B9B;
        }

        .chat-header .chat-logo {
            width: 41px;
            height: 41px;
            border-radius: 50%;
            border: 2px solid #a259e6;
            background: #fff;
            box-shadow: 0 1px 14px rgba(140, 68, 202, 0.08);
            object-fit: cover;
        }

        .modal-title {
            font-size: 2rem !important;
            font-weight: 700;
            color: #6C3B9B !important;
            letter-spacing: 0.3px;
        }

        .modal-body.chat-body {
            max-height: 330px;
            overflow-y: auto;
            padding: 1.25rem 1.2rem 1rem 1.2rem;
            background: linear-gradient(120deg, rgba(210, 189, 235, 0.11) 0%, #fff 100%);
            scrollbar-width: none;
            /* Firefox */
        }

        .modal-body.chat-body::-webkit-scrollbar {
            width: 0;
            height: 0;
            background: transparent;
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .modal-body.chat-body {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .message-incoming,
        .message-outgoing {
            max-width: 75%;
            padding: 0.8rem 1rem;
            border-radius: 1rem;
            margin-bottom: 1.2rem;
            position: relative;
            font-size: 0.97rem;
            line-height: 1.5;
            word-wrap: break-word;
            box-shadow: 0 2px 8px rgba(140, 68, 202, 0.09);
            transition: background 0.2s;
        }

        .message-incoming {
            background: rgba(255, 255, 255, 0.93);
            margin-right: auto;
            color: #420A5C;
        }

        .message-outgoing {
            background: linear-gradient(92deg, #a259e6 0%, #6d28d9 100%);
            color: white;
            margin-left: auto;
        }

        .timestamp {
            font-size: 0.78rem;
            color: #a884c2;
            margin-top: 4px;
            text-align: right;
        }

        .modal-footer {
            border-top: none;
            padding: 0.8rem 1.2rem;
            background: transparent;
        }

        .message-input {
            border-radius: 2rem 0 0 2rem;
            border: none;
            padding: 0.6rem 1rem;
            background: rgba(245, 245, 255, 0.89);
            box-shadow: 0 1px 6px rgba(162, 89, 230, 0.06) inset;
        }

        .send-btn {
            border-radius: 0 2rem 2rem 0;
            background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);
            color: white;
            border: none;
            padding: 0 1rem;
            transition: background 0.19s;
        }

        .send-btn:hover,
        .send-btn:focus {
            background: linear-gradient(90deg, #6d28d9 0%, #a259e6 100%);
        }

        /* Catalogue Section - Zoom on Hover */
        .cat-img-zoom {
            transition: transform 0.39s cubic-bezier(.32, 1.49, .61, 1), box-shadow 0.23s;
            border-radius: 50%;
            box-shadow: 0 2px 14px rgba(140, 68, 202, 0.13);
            cursor: pointer;
        }

        .cat-img-zoom:hover {
            transform: scale(1.20) rotate(-2deg);
            box-shadow: 0 4px 24px rgba(140, 68, 202, 0.26);
            z-index: 2;
        }

        /* Animated Cards */
        .card {
            border-radius: 20px;
            overflow: hidden;
            margin: 10px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.09);
            height: 450px;
            display: flex;
            flex-direction: column;
            transition: transform 0.32s cubic-bezier(.41, 1.51, .61, 1), box-shadow 0.2s;
            background: rgba(255, 255, 255, 0.97);
        }

        .card:hover {
            transform: translateY(-16px) scale(1.05) rotate(-1.5deg);
            box-shadow: 0 16px 36px rgba(162, 89, 230, 0.13), 0 6px 30px rgba(90, 35, 146, 0.10);
        }

        .card-img-top {
            height: 100%;
            object-fit: cover;
            flex-grow: 1;
            transition: transform 0.38s cubic-bezier(.34, 1.51, .61, 1);
        }

        .card:hover .card-img-top {
            transform: scale(1.04);
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

        .btn {
            background-color: #9273A7;
            color: white;
            font-weight: 800;
            font-size: 32px;
            font-family: 'Arial Black', sans-serif;
            padding: 20px 50px;
            border: none;
            border-radius: 15px;
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.4);
            cursor: pointer;
            transition: transform 0.2s cubic-bezier(.41, 1.51, .61, 1);
        }

        .btn:hover {
            transform: translateY(-2px) scale(1.03);
        }

        /* Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Garet&display=swap');

        /* Responsive for smaller screens */
        @media (max-width: 600px) {
            .chatbot-fab-btn {
                width: 54px;
                height: 54px;
            }

            .chatbot-fab-btn .btn-label {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include 'common/navbar.php'; ?>

    <!-- Carousel Section -->
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/Home/screen1.png'); ?>" class="d-block w-100" alt="screen1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/Home/screen2.png'); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/Home/screen3.png'); ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Chatbot Floating Action Button -->
    <div class="position-fixed bottom-0 end-0 p-4">
        <button class="chatbot-fab-btn" data-bs-toggle="modal" data-bs-target="#chatbotModal" aria-label="Ask Question">
            <img src="<?php echo base_url('assets/Home/chatbot-icon.png'); ?>" alt="Logo" class="chat-logo">
            <span class="btn-label">Ask Question</span>
        </button>
    </div>

    <!-- Modal for Chatbot -->
    <div class="modal fade" id="chatbotModal" tabindex="-1" aria-labelledby="chatbotModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="chat-header">
                        <img src="<?php echo base_url('assets/Home/chatbot-icon.png'); ?>" alt="Logo" class="chat-logo">
                        <h5 class="modal-title fs-3" id="chatbotModalLabel">Welcome to Jiva</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body chat-body">
                    <div class="message-incoming">
                        Lorem ipsum dolor sit amet consectetur. Cursus sagittis enim mi placerat odio aliquam eleifend. Fermentum sem convallis.
                        <div class="timestamp">Today 12:00 PM</div>
                    </div>
                    <div class="message-outgoing">
                        Lorem ipsum dolor sit
                        <div class="timestamp">Today 12:01 PM</div>
                    </div>
                    <div class="message-incoming">
                        Lorem ipsum dolor sit amet consectetur. Cursus sagittis enim mi placerat odio aliquam eleifend. Fermentum sem convallis.
                        <div class="timestamp">Today 12:01 PM</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="input-group">
                        <input type="text" class="form-control message-input" placeholder="Message" aria-label="Message">
                        <button class="send-btn" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm-5.464-4.95 4.338 2.76-5.81 4.132z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Catalogue Section -->
    <section class="py-4 ">
        <div class="container text-center">
            <h2 class="mb-5  fw-bold">Catalogue</h2>
            <div class="row justify-content-center">
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (6).png'); ?>" class="rounded-circle w-100 h-100 cat-img-zoom" style="object-fit: cover;" alt="Rings">
                    </div>
                    <p class="mt-2 text-center text-dark ">Rings</p>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (5).png'); ?>" class="rounded-circle w-100 h-100 cat-img-zoom" style="object-fit: cover;" alt="Nose Pins">
                    </div>
                    <p class="mt-2 text-center text-dark">Nose Pins</p>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (1).png'); ?>" class="rounded-circle w-100 h-100 cat-img-zoom" style="object-fit: cover;" alt="Earring">
                    </div>
                    <p class="mt-2 text-center text-dark">Earring</p>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (2).png'); ?>" class="rounded-circle w-100 h-100 cat-img-zoom" style="object-fit: cover;" alt="Bangles">
                    </div>
                    <p class="mt-2 text-center  text-dark ">Bangles</p>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (3).png'); ?>" class="rounded-circle w-100 h-100 cat-img-zoom" style="object-fit: cover;" alt="Necklace">
                    </div>
                    <p class="mt-2 text-center text-dark">Necklace</p>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (4).png'); ?>" class="rounded-circle w-100 h-100 cat-img-zoom" style="object-fit: cover;" alt="Anklet">
                    </div>
                    <p class="mt-2 text-center text-dark">Anklet</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-0" style="background-color:rgb(210, 189, 235);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1">
                    <div class="p-4 rounded-3">
                        <h2 class="fw-bold mb-4 ">About Us</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Cursus sagittis enim mi placerat odio aliquam eleifend. Fermentum sem convallis magna magna porttitor eu. Vitae sodales mauris sed neque du vulputate porta. Ut neque cursus purus risus. Bibendum est amet turpis.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 text-center">
                    <img src="<?php echo base_url('assets\Home\aboutus.png'); ?>" class="img-fluid" alt="Person">
                </div>
            </div>
        </div>
    </section>

    <!-- Bracelet Collection Section -->
    <section class="py-5" style="background: linear-gradient(45deg,rgb(145, 105, 187) 0%, #FFFFFF 100%);">
        <div class="container">
            <h2 class="fw-bold mb-3 text-center">Bracelet Collection</h2>
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <div style="width: 400px; height: 500px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets\Home\Braclet.png'); ?>" class="rounded-3 w-100 h-100" style="object-fit: cover;" alt="Bracelet">
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-4" style="color: #715454;">
                        Discover our stunning collection of bracelets, crafted to perfection for every style and moment, from elegant solitaires and dazzling diamond bands to modern statement pieces and classic gold rings. Each bracelet is designed to add a touch of sophistication and charm to your jewelry collection, making it perfect for gifting or personal indulgence. Explore our exquisite range and find the perfect piece that resonates with your unique style and personality.
                    </p>
                    <div class="d-flex justify-content-center">
                        <button class="btn text-white text-center fw-6 px-4 py-2 rounded-3" style="background-color: #5E358E; font-weight:500;">View Collection</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Women's Happiness Section -->
    <section class="py-5" style="background-color: #E6D6F5;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Heading -->
                <div class="col-12 text-center mb-3">
                    <h1 class="fw-bold" style="color: #5E358E; font-size: 3rem;">Celebrate Women's Happiness</h1>


                </div>
                <p class="mb-4 text-center " style="color: #5E358E;">
                    Celebrate your unique style with our exquisite women's jewellery collection.<br> From timeless gold and diamond pieces
                </p>
                <!-- Images and Text -->
                <div class="col-md-4 text-center mb-4 d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
                    <div style="width: 100%; max-width: 300px; margin-top: 120px;">
                        <img src="<?php echo base_url('assets/Home/Group 3.png'); ?>" class="img-fluid rounded-3" alt="Jewelry Image 1">
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4 d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
                    <div style="width: 100%; max-width: 300px;">
                        <img src="<?php echo base_url('assets/Home/Group 2.png'); ?>" class="img-fluid rounded-3" alt="Jewelry Image 2">
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-start">
                    <div style="width: 100%; max-width: 300px; margin: 0 auto;">
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
    <section class="py-5" style="background-color:rgb(202, 142, 90 ,0%);">
        <div class="container ">

            <!-- First row -->
            <div class="row section align-items-center">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets/Home/Collection1.png'); ?>" class="img-fluid" alt="Engagement Rings">
                </div>
                <div class="col-md-6">
                    <h5 class="section-title text-center mb-4" style="color:rgba(66, 10, 92, 0.76);">Engagement Rings Collection</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur. In purus vitae rutrum risus et fringilla phasellus ipsum eget. Id sagittis ac turpis ultrices non. Ultrices eu sit faucibus turpis. Mi suspendisse aliquet augue purus mauris egestas pharetra in nulla. Viverra.
                    </p>
                    <div class="d-flex justify-content-center">
                        <button class="btn text-white px-4 py-2 mb-3 rounded-3" style="background-color: #5E358E;">Explore Now</button>
                    </div>
                </div>
            </div>
            <!-- Second row  -->
            <div class="row section align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="<?php echo base_url('assets/Home/Collection2.png'); ?>" class="img-fluid" alt="Wedding Special">
                </div>
                <div class="col-md-6 order-md-1">
                    <h5 class="section-title text-center mb-4">Wedding Special Collection</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur. In purus vitae rutrum risus et fringilla phasellus ipsum eget. Id sagittis ac turpis ultrices non. Ultrices eu sit faucibus turpis. Mi suspendisse aliquet augue purus mauris egestas pharetra in nulla. Viverra.
                    </p>
                    <div class="d-flex justify-content-center">
                        <button class="btn text-white px-4 mb-3 py-2 rounded-3" style="background-color: #5E358E;">Explore Now</button>
                    </div>
                </div>
            </div>
            <!-- <img src="<?php echo base_url('assets/Home/collection.png'); ?>" class="flower-icon" alt="Flower Icon">
        </div> -->
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row banner" style="background: rgba(66, 10, 92, 0.38); border-radius: 1rem; overflow: hidden;">
                <div class="col-md-6 p-0">
                    <img src="<?php echo base_url('assets\Home\newcollection.png'); ?>" class="img-fluid w-100 h-100" style="object-fit: cover; border-radius: 1rem 0 0 1rem;" alt="Jewelry Collection">
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center" style="min-height: 350px;">
                    <div class="text-center px-3">
                        <h3 class="fw-bold mb-4" ">Explore Our Latest Pendant & Rings Collection</h3>
                        <button class=" btn btn-custom text-white px-4 py-2" style="background-color: #5E358E; border-radius: 0.5rem;">Explore Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5">
            <h2 class="text-center section-title brand-store mb-5">Brand Store</h2>
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="<?php echo base_url('assets/Home/brand/brand1.png'); ?>" class="img-fluid  shadow" alt="Shaya Jewelry" style="max-width: 100%; height: auto;">
                </div>
                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <img src="<?php echo base_url('assets/Home/brand/brand2.png'); ?>" class="img-fluid  shadow" alt="Everyday Jewelry" style="width: 100%; height: auto;">
                        </div>
                        <div class="col-12">
                            <img src="<?php echo base_url('assets/Home/brand/brand3.png'); ?>" class="img-fluid shadow" alt="Special Jewelry" style="width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container py-5">

                <div class="row g-4 align-items-center justify-content-center">
                    <div class="col-md-4 d-flex justify-content-center">
                        <img src="<?php echo base_url('assets\Home\brand\image 54.png'); ?>" class="img-fluid shadow" alt="Brand 1" style="max-width: 100%; height: auto;">
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <img src="<?php echo base_url('assets/Home/brand/image 56.png'); ?>" class="img-fluid shadow" alt="Brand 2" style="max-width: 100%; height: auto;">
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <img src="<?php echo base_url('assets/Home/brand/image 57.png'); ?>" class="img-fluid shadow" alt="Brand 3" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container g-5 text-center">
                <div class="row">
                    <div class="col-md-3 card-container">
                        <div class="card" style="border-radius: 20px; overflow: hidden;">
                            <img src="<?php echo base_url('assets\Home\brand\image 33.png'); ?>" class="card-img-top" alt="Jewelry Image" style="border-radius: 20px 20px 0 0;">
                        </div>
                    </div>
                    <div class="col-md-3 card-container">
                        <div class="card" style="border-radius: 20px; overflow: hidden;">
                            <img src="<?php echo base_url('assets\Home\brand\image 34.png'); ?>" class="card-img-top" alt="Jewelry Image" style="border-radius: 20px 20px 0 0;">
                        </div>
                    </div>
                    <div class="col-md-3 card-container">
                        <div class="card" style="border-radius: 20px; overflow: hidden;">
                            <img src="<?php echo base_url('assets\Home\brand\image 35.png'); ?>" class="card-img-top" alt="Jewelry Image" style="border-radius: 20px 20px 0 0;">
                        </div>
                    </div>
                    <div class="col-md-3 card-container">
                        <div class="card" style="border-radius: 20px; overflow: hidden;">
                            <img src="<?php echo base_url('assets\Home\brand\image 36.png'); ?>" class="card-img-top" alt="Jewelry Image" style="border-radius: 20px 20px 0 0;">
                        </div>
                    </div>
                </div>
                <div class="d-flex m-4 justify-content-center">
                    <button class="btn text-white px-4 mb-3 py-2 rounded-3" style="background-color: #5E358E;">More</button>
                </div>
            </div>
        </section>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons for Chat Button -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script>
        // Ensure carousel auto-slides if not already set by data-bs-interval
        var carousel = document.querySelector('#carouselExample');
        if (carousel) {
            var carouselInstance = bootstrap.Carousel.getOrCreateInstance(carousel, {
                interval: 2500,
                ride: 'carousel',
                pause: false,
                wrap: true
            });
        }
    </script>
</body>

</html>