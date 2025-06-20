<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    <style>
       
.bg-purple {
    background-color: #a678e2;
}

#sidebar .nav-link {
    padding: 10px;
    font-weight: 500;
}

#sidebar .nav-link:hover {
    background-color: #915cd1;
    border-radius: 5px;
}



 .profile {
      text-align: center;
      width: 100%;
      margin-bottom: 30px;
    }

     .profile img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      background-color: #FBF9FF6E;
    }
    .log-out
    {


      transform:translateY(150px);
    }

@media (max-width: 575.98px) {
nav{

font-size:10px;

padding:5px;

}
nav li {

  
  margin-bottom:20px;
}
.log-out
{

transform:translateY(10px)!important;

}

}


@media (min-width: 576px) and (max-width: 767.98px) {

nav{

font-size:12px;



}
nav li {

  
  margin-bottom:20px;
}

     .log-out
    {


      transform:translateY(20px);
    }
}


@media (min-width: 768px) and (max-width: 991.98px) {

nav{

font-size:13px;

padding:8px;

}
nav li {

  
  margin-bottom:20px;
}
    .log-out
    {


      transform:translateY(20px);
    }

}

@media (min-width: 992px) and (max-width: 1199.98px) {

nav{

font-size:15px;
padding:10px;

}
nav li {

  
  margin-bottom:20px;
}
    .log-out
    {


      transform:translateY(100px);
    }

}

@media (min-width: 1200px) and (max-width: 1399.98px) {
nav{

font-size:18px;

padding:10px;

}
nav li {

  
  margin-bottom:20px;
}

}

@media (min-width: 1400px) {
nav{

font-size:20px;

padding:15px;

}
nav li {

  margin-bottom:20px;
};

}

.popup-overlay {
  position: fixed;
  top: 0; left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(255, 255, 255, 0.4);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
       backdrop-filter: blur(6px);
       
}

.popup-box {
  background: white;
  padding: 1.5rem;
  border-radius: 1rem;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  width: 90%;
  max-width: 400px;
}



.popup-buttons .btn {
  min-width: 100px;
}



    </style>
</head>
<body>

     <!-- Sidebar -->
      <!-- sidebar2.php -->
<nav class=" text-white  h-100">
  <div class="text-center profile mb-4">
    <img src="<?php echo base_url("assets/images/logo.png"); ?>" class="rounded-circle" alt="Profile">
  </div>
  <ul class="nav flex-column">


    <li class="nav-item"><a href="<?php echo site_url('Welcome/dashboard');?>" class="nav-link text-dark "><i class="pe-2 mr-2 fas text-dark fa-chart-line"></i>Dashboard</a></li>
    <li class="nav-item"><a href="<?php echo site_url('Welcome/product');?>" class="nav-link text-dark "><i class="pe-2 mr-2 fas text-dark fa-box"></i>Product</a></li>
    <li class="nav-item"><a href="<?php echo site_url('Welcome/orders');?>" class="nav-link text-dark "><i class="pe-2 mr-2 fas text-dark fa-cart-shopping"></i>Orders</a></li>
    <li class="nav-item"><a href="<?php echo site_url('Welcome/rating');?>" class="nav-link text-dark "><i class="pe-2 mr-2 fas text-dark fa-comment-dots"></i>Reviews</a></li>
    <li class="nav-item"><a href="<?php echo site_url('Welcome/cust');?>" class="nav-link text-dark "><i class="pe-2 mr-2 fas text-dark fa-user-group"></i>Customers</a></li>
    <li class="nav-item  text-dark log-out" ><a href="#" class="nav-link text-dark "><i class="pe-2 mr-2  text-dark fas text-dark fa-right-from-bracket"></i>Logout</a></li>
 
  </ul>
</nav>



<div class="popup-overlay popup-overlay-logout" style="display: none;">
  <div class="popup-box text-center">
    <div class="popup-icon mb-2">
      <i class="fas text-dark fa-sign-out-alt fa-2x" style="color: #915cd1;"></i>
    </div>
    <div class="popup-message fw-bold">Log Out?</div>
    <div class="popup-sub text-muted mb-3">Are you sure you want to logout from your account?</div>
    <div class="popup-buttons d-flex justify-content-center gap-3">
      <button class="btn btn-yes btn-outline-primary">Yes, Logout</button>
      <button class="btn btn-cancel btn-outline-secondary">Cancel</button>
    </div>
  </div>
</div>

<script>


  // Show logout popup
document.querySelector('.log-out').addEventListener('click', function() {
  document.querySelector('.popup-overlay-logout').style.display = 'flex';
});

// Cancel button
document.querySelector('.btn-cancel').addEventListener('click', function() {
  document.querySelector('.popup-overlay-logout').style.display = 'none';
});

</script>
</body>
</html>