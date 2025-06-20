<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">


</head>

<body>
    <!-- Navbar -->
    <?php include 'common/navbar.php'; ?>

    <!-- Carousel Section -->
    <div id="jewelryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="container-fluid text-center py-5" style="background: url('<?php echo base_url('assets/Home/screen2.png'); ?>') no-repeat center center; background-size: cover; min-height: 100vh;">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h1 class="display-4 text-white fw-bold">Golden Edit</h1>
                            <p class="lead text-white">Discover Timeless Elegance</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="container-fluid text-center py-5" style="background: url('<?php echo base_url('assets/Home/screen1.png'); ?>') no-repeat center center; background-size: cover; min-height: 100vh;">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h1 class="display-4 text-white fw-bold">Golden Edit</h1>
                            <p class="lead text-white">Shine with Every Detail</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="container-fluid text-center py-5" style="background: url('<?php echo base_url('assets/Home/screen3.png'); ?>') no-repeat center center; background-size: cover; min-height: 100vh;">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h1 class="display-4 text-white fw-bold">Golden Edit</h1>
                            <p class="lead text-white">Crafted for Perfection</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#jewelryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#jewelryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Chatbot Button -->
    <div class="position-fixed bottom-0 end-0 p-4">
        <button class="chatbot-btn  rounded-pill d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#chatModal">
            <span class="me-2">Ask Question</span>
            <i class="bi bi-chat-dots"></i>
        </button>
    </div>

    <!-- Chat Modal -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
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
    </div>


    <!-- Bootstrap Icons for Chat Button -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Footer -->
    <?php include 'common/footer.php'; ?>
</body>

</html>