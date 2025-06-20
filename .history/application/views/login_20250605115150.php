<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-image: url('<?php echo base_url('assets/images/background.jpg'); ?>'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="p-4 rounded-3 shadow" style="background-color: rgba(255, 255, 255, 0.2);">
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label text-white fw-bold">ENTER USERNAME</label>
                            <input type="text" class="form-control bg-transparent text-white border-white" id="username" placeholder="Value">
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label text-white fw-bold">ENTER YOUR MOBILE NO.</label>
                            <input type="text" class="form-control bg-transparent text-white border-white" id="mobile" placeholder="Value">
                        </div>
                        <button type="submit" class="btn w-100 text-white fw-bold" style="background-color: #67347B;">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>