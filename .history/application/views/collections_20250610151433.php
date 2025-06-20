<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .login-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }

        .login-card h2 {
            margin-bottom: 25px;
            font-weight: bold;
            text-align: center;
        }

        .form-control:focus {
            border-color: #764ba2;
            box-shadow: 0 0 0 0.2rem rgba(118, 75, 162, 0.25);
        }

        .btn-login {
            background-color: #764ba2;
            color: white;
            font-weight: bold;
        }

        .btn-login:hover {
            background-color: #5e3b99;
        }

        .forgot-link {
            text-align: right;
            display: block;
            margin-top: 10px;
            font-size: 0.9rem;
        }

        .forgot-link a {
            color: #764ba2;
            text-decoration: none;
        }

        .forgot-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <section class="main" style="background-image: url('<?php echo base_url("assets/Home/loginbackground.jpg"); ?>');">

        <div class="login-card">
            <h2>Login</h2>
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter username" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Enter password" required>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-login w-100">Login</button>
                </div>

                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
        </div>
       </section>

</body>

</html>