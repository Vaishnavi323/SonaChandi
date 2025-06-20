<!DOCTYPE html>
<html lang="en">

<head>
       
    <meta charset="UTF-8">
       
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>

        <!-- Bootstrap CSS -->
       
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       
        <!-- Custom CSS -->
        <style>
        body {
            background-image: url('assets/Home/loginbackground.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            background-color: transparent;
            color: white;
            border: 1px solid white;
        }

        .btn-login {
            background-color: #67347B;
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body>
        <div class="container">
                <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-4">
                                <div class="p-4 rounded-3 shadow login-container">
                                        <form>
                                                <div class="mb-3">
                                                        <label for="username" class="form-label text-white">ENTER USERNAME</label>
                                                        <input type="text" class="form-control" id="username" placeholder="Value">
                                                    </div>
                                                <div class="mb-3">
                                                        <label for="mobile" class="form-label text-white">ENTER YOUR MOBILE NO.</label>
                                                        <input type="text" class="form-control" id="mobile" placeholder="Value">
                                                    </div>
                                                <button type="submit" class="btn w-100 btn-login">Login</button>
                                            </form>
                                    </div>
                            </div>
                    </div>
            </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>