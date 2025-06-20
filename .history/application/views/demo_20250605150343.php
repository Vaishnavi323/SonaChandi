<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* Chatbot Button Styling */
        .chatbot-btn {
            background: linear-gradient(90deg, #6b2d5c, #8a4b9f);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s ease-in-out;
        }

        .chatbot-btn:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #8a4b9f, #6b2d5c);
        }

        .chatbot-btn i {
            font-size: 1.2rem;
        }

        /* Modal Styling */
        .modal-content {
            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            background-color: #f8f9fa;
            border-bottom: none;
            padding: 15px 20px;
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

        .modal-title {
            font-weight: 600;
            color: #333;
        }

        .btn-close {
            filter: opacity(0.6);
        }

        .btn-close:hover {
            filter: opacity(1);
        }

        .chat-body {
            max-height: 400px;
            overflow-y: auto;
            background-color: #fff;
            padding: 20px;
        }

        .message-incoming {
            background-color: #f1f1f1;
            border-radi
            padding: 10px 15px;
            margin-bottom: 10px;
            max-width: 80%;
            font-size: 0.9rem;
            color: #333;
        }

        .message-outgoing {
            background-color: #6b2d5c;
            color: white;
            border-radius: 15px;
            padding: 10px 15px;
            margin-bottom: 10px;
            max-width: 80%;
            margin-left: auto;
            font-size: 0.9rem;
        }

        .timestamp {
            font-size: 0.75rem;
            color: #6c757d;
            text-align: right;
            margin-top: 5px;
        }

        .modal-footer {
            border-top: none;
            padding: 10px 20px;
            background-color: #f8f9fa;
        }

        .message-input {
            border-radius: 20px;
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 0.9rem;
        }

        .message-input:focus {
            box-shadow: none;
            border-color: #6b2d5c;
        }

        .send-btn {
            background-color: transparent;
            border: none;
            padding: 0 10px;
        }

        .send-btn svg {
            fill: #6b2d5c;
        }

        .send-btn:hover svg {
            fill: #8a4b9f;
        }
    </style>
</head>

<body>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>