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

        .p {
            color: #715454 !important;
        }

        body {
            font-family: 'Garet', sans-serif;

        }

        .chatbot-btn {
            background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);
        }

        .chatbot-btn:hover {
            background: linear-gradient(90deg, #6d28d9 0%, #a259e6 100%);
        }

        .modal-content {
            border-radius: 15px;

        }

        .modal-header {
            background-color: #f8f9fa;
            border-bottom: none;
        }

        .chat-header {
            display: flex;
            align-items: center;
        }

        .chat-logo {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .chat-body {
            max-height: 400px;
            overflow-y: auto;
            padding: 20px;
        }

        .message-incoming {
            background-color: #f1f1f1;
            border-radius: 15px;
            padding: 10px 15px;
            margin-bottom: 10px;
            max-width: 80%;
        }

        .message-outgoing {
            background-color: #935EB1;
            color: white;
            border-radius: 15px;
            padding: 10px 15px;
            margin-bottom: 10px;
            max-width: 80%;
            margin-left: auto;
        }

        .timestamp {
            font-size: 0.8rem;
            color: #6c757d;
            text-align: right;
        }

        .message-input {
            border-radius: 20px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        .send-btn {
            background-color: transparent;
            border: none;
        }

        .modal-footer {
            border-top: none;
            padding: 10px 20px;
        }

        /* Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Garet&display=swap');

        .chatbot-btn {
            background-color: #6C3B9B;
            /* Deep purple */
            font-family: 'Garet', sans-serif;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .modal-content {
            border-radius: 1.5rem;
            backdrop-filter: blur(20px);
            background-color: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);

        }

        .chat-header {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: 'Cormorant Garamond', serif;
            color: #6C3B9B;
        }

        .chat-logo {
            width: 40px;
            height: 40px;
        }

        .chat-body {
            max-height: 300px;
            overflow-y: auto;
            padding: 1rem;
            font-family: 'Garet', sans-serif;
        }

        .message-incoming,
        .message-outgoing {
            max-width: 75%;
            padding: 0.8rem 1rem;
            border-radius: 1rem;
            margin-bottom: 1rem;
            position: relative;
            font-size: 0.9rem;
            line-height: 1.4;
            word-wrap: break-word;
        }

        .message-incoming {
            background: rgba(255, 255, 255, 0.9);
            margin-right: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .message-outgoing {
            background-color: #6C3B9B;
            color: white;
            margin-left: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .timestamp {
            font-size: 0.7rem;
            color: #555;
            margin-top: 4px;
        }

        .modal-footer {
            border-top: none;
            padding: 0.8rem 1rem;
            background: transparent;
        }

        .message-input {
            border-radius: 2rem 0 0 2rem;
            border: none;
            padding: 0.6rem 1rem;
            font-family: 'Garet', sans-serif;
        }

        .send-btn {
            border-radius: 0 2rem 2rem 0;
            background-color: #6C3B9B;
            color: white;
            border: none;
            padding: 0 1rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include 'common/navbar.php'; ?>

    <!-- Carousel Section -->
    <div id="carouselExample" class="carousel slide">
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

    <!-- Chatbot Button -->
    <div class="position-fixed bottom-0 end-0 p-4">
        <button class="chatbot-btn btn text-white rounded-pill d-flex align-items-center px-3 py-2" data-bs-toggle="modal" data-bs-target="#chatbotModal">
            <span class="me-2">Ask Question</span>
            <i class="bi bi-chat-dots"></i>
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
                        <img src="<?php echo base_url('assets/Home/catloge/image (6).png'); ?>" class="rounded-circle w-100 h-100" style="object-fit: cover;" alt="Rings">
                    </div>
                    <p class="mt-2">Rings</p>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (5).png'); ?>" class="rounded-circle w-100 h-100" style="object-fit: cover;" alt="Nose Pins">
                    </div>
                    <p class="mt-2">Nose Pins</p>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (1).png'); ?>" class="rounded-circle w-100 h-100" style="object-fit: cover;" alt="Earring">
                    </div>
                    <p class="mt-2">Earring</p>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (2).png'); ?>" class="rounded-circle w-100 h-100" style="object-fit: cover;" alt="Bangles">
                    </div>
                    <p class="mt-2">Bangles</p>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (3).png'); ?>" class="rounded-circle w-100 h-100" style="object-fit: cover;" alt="Necklace">
                    </div>
                    <p class="mt-2">Necklace</p>
                </div>
                <div class="col-4 col-md-2 mb-4">
                    <div style="width: 100px; height: 100px; margin: 0 auto;">
                        <img src="<?php echo base_url('assets/Home/catloge/image (4).png'); ?>" class="rounded-circle w-100 h-100" style="object-fit: cover;" alt="Anklet">
                    </div>
                    <p class="mt-2">Anklet</p>
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
                        <button class="btn text-white text-center fw-5 px-4 py-2 rounded-3" style="background-color: #5E358E; font-weight:500;">View Collection</button>
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
    <section class="py-5">
        <div class="container">

            <!-- First row -->
            <div class="row section align-items-center">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets/Home/Collection1.png'); ?>" class="img-fluid" alt="Engagement Rings">
                </div>
                <div class="col-md-6">
                    <h5 class="section-title">Engagement Rings Collection</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur. In purus vitae rutrum risus et fringilla phasellus ipsum eget. Id sagittis ac turpis ultrices non. Ultrices eu sit faucibus turpis. Mi suspendisse aliquet augue purus mauris egestas pharetra in nulla. Viverra.
                    </p>
                    <a href="#" class="btn btn-custom">Explore Now</a>
                </div>
            </div>
            <!-- Second row  -->
            <div class="row section align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="<?php echo base_url('assets/Home/Collection2.png'); ?>" class="img-fluid" alt="Wedding Special">
                </div>
                <div class="col-md-6 order-md-1">
                    <h5 class="section-title">Wedding Special Collection</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur. In purus vitae rutrum risus et fringilla phasellus ipsum eget. Id sagittis ac turpis ultrices non. Ultrices eu sit faucibus turpis. Mi suspendisse aliquet augue purus mauris egestas pharetra in nulla. Viverra.
                    </p>
                    <a href="#" class="btn btn-custom">Explore Now</a>
                </div>
            </div>
            <!-- <img src="<?php echo base_url('assets/Home/collection.png'); ?>" class="flower-icon" alt="Flower Icon">
        </div> -->
        </div>
    </section>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>







    <!-- Bootstrap Icons for Chat Button -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>

</html>