<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    .main {
      height: 100vh;
      width: 100%;
      background-image: url('<?php echo base_url("assets/images/banner.png"); ?>');
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;



      display: flex;
      align-items: center;
      justify-content: center;


    }

    .content-box {
      height: 350px;
      width: 600px;
      background: rgba(47, 22, 28, 0.75);
      box-shadow: 0 8px 32px 0 rgb(53, 45, 45);
      border: 1px solid #D9D9D9 !important;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
    }



    .glass-card {

      display: flex;
      justify-content: space-evenly;


      height: 70%;
      width: 70%;
      flex-direction: column;
      text-align: center;
    }

    .glass-card form {


      display: flex;
      justify-content: center;
      flex-direction: column;

    }

    .glass-card h3 {
      font-weight: bold;
      margin-bottom: 30px;
    }

    .form-control {

      background: rgba(217, 217, 217, 0.33);
      border: 1px solid rgb(217, 217, 217) !important;


      width: 80%;
      height: 90%;
      box-shadow: 0 5px 7px 0 rgb(53, 45, 45);
    }

    ::placeholder {
      color: white !important;

    }

    .button-63 {
      background: #391721;


      box-shadow: 0 8px 15px rgba(46, 139, 87, 0.3);
      color: #ffffff;
      font-weight: bold;
      padding: 10px;
      cursor: pointer;
      transition: all 0.3s ease;

      width: 80%;
      height: 90%;

    }




    .mb-3 {

      display: flex;
      justify-content: center;

    }
  </style>
</head>

<body>




  <section class="main">



    <div class="content-box mx-2">

      <div class="glass-card">
        <form class="  ">
          <div class="mb-3">
            <input type="email" class="form-control " placeholder="Email">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control " placeholder="Password">
          </div>
          <div class="mb-3">
            <button type="submit" class="button-63 border rounded-2">Sign In</button>
          </div>
          <div class="register-link d-block text-start">
            <a href="#" class="ms-4 text-white">Forget Password</a>
          </div>
        </form>



      </div>
    </div>

  </section>
</body>

</html>