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
        .chatbot-btn {
            background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);
        }

        .chatbot-btn:hover {
            background: linear-gradient(90deg, #6d28d9 0%, #a259e6 100%);
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
        <button class="chatbot-btn btn text-white rounded-pill d-flex align-items-center px-3 py-2" data-bs-toggle="modal" data-bs-target="#chatModal">
            <span class="me-2">Ask Question</span>
            <i class="bi bi-chat-dots"></i>
        </button>
    </div>

    <!-- Chat Modal -->
    <!-- <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chatModalLabel">Ask a Question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" rows="3" placeholder="Type your question here..."></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Modal -->
    <div class="modal fade" id="chatbotModal" tabindex="-1" aria-labelledby="chatbotModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="chat-header">
                        <img src="https://via.placeholder.com/30x30?text=🌸" alt="Logo" class="chat-logo">
                        <h5 class="modal-title" id="chatbotModalLabel">Welcome to Jiva</h5>
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









    <!-- Bootstrap Icons for Chat Button -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>

</html>