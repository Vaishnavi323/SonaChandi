<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Our Stores</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Minimal custom CSS for specific styling */
        .store-section {
            padding: 40px 0;
        }

        .store-image {
            width: 100%;
            height: auto;
        }

        .content-box {
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .content-box-header {
            background-color: #6f42c1;
            color: white;
            padding: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .content-box-body {
            padding: 15px;
        }

        .btn-whatsapp {
            background-color: #25D366;
            color: white;
        }

        .btn-book-visit {
            background-color: #6f42c1;
            color: white;
        }

        .btn-view-store {
            background-color: #6f42c1;
            color: white;
        }
    </style>
</head>

<body>
    <section class="store-section">
        <div class="container">
            <!-- Heading -->
            <h2 class="text-center mb-4" style="color: #6f42c1;">Visit Our Stores</h2>
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="<?php echo base_url('assets\services\services.png'); ?>" alt="Store Image" class="store-image">
                </div>
                <!-- Content Box Column -->
                <div class="col-md-6">
                    <div class="content-box">
                        <!-- Header -->
                        <div class="content-box-header">
                            <h5 class="mb-0">Jiva Store</h5>
                        </div>
                        <!-- Body -->
                        <div class="content-box-body">
                            <p>Lorem ipsum dolor sit amet consectetur. Felis volutpat lacinia at eget a lobortis justo vitae vulvinar.</p>
                            <!-- Buttons -->
                            <div class="d-flex gap-2">
                                <button class="btn btn-whatsapp">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg>
                                    WhatsApp
                                </button>
                                <button class="btn btn-book-visit">Book Visit</button>
                                <button class="btn btn-view-store">View Store</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>