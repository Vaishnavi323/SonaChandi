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
            background-color: rgba(255, 255, 255, 0.10);
            border: 2px solid;
            border-image: linear-gradient(90deg, #935EB1, #7542AC) 1;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.10);
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>







    <!-- Bootstrap Icons for Chat Button -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>

</html>