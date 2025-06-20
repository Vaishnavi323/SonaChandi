<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    
html, body {
  margin: 0;
  padding: 0;
  background: white;
  width: 100%;
  overflow-x: hidden;
}






  
  
  
  







        .stepper-wrapper {
      display: flex;
      justify-content: space-between;
      margin: 40px auto;
      max-width: 600px;
      position: relative;
    }

    .stepper-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1;
      position: relative;
    }

    .stepper-item::before {
      content: '';
      position: absolute;
      top: 20px;
      left: -50%;
      height: 3px;
      width: 100%;
      background-color: #d3d3d3;
      z-index: 0;
    }

    .stepper-item:first-child::before {
      content: none;
    }

    .step-counter {
      width: 40px;
      height: 40px;
      background-color: #915cd1;
      border-radius: 50%;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      z-index: 1;
    }

    .stepper-item.completed .step-counter {
      background-color: #28a745;
    }

    .stepper-item.active .step-counter {
      background-color: white;
      border: 3px solid #915cd1;
      color: #915cd1;
    }

    .step-name {
      margin-top: 8px;
      font-weight: 500;
    }

    .stepper-item.completed .step-name {
      color: #6c757d;
    }

    .stepper-item.active .step-name {
      color: #000;
    }


           .gradient-button {
      background: linear-gradient(to right, #da8cff, #9a55ff);
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s ease-in-out;
      box-shadow: 0 4px 10px rgba(154, 85, 255, 0.3);
      margin:0px 180px 0px 180px;
    }

    .gradient-button:hover {
      opacity: 0.9;
      transform: scale(1.03);
    }



   .order-container {
  background: rgba(255, 255, 255, 0.9); /* less transparent for better readability */
  backdrop-filter: blur(12px);          /* smoother blur */
  -webkit-backdrop-filter: blur(12px);  /* for Safari support */
  border-radius: 15px;
  box-shadow: 0 6px 24px rgba(0, 0, 0, 0.1);
  padding: 25px;
  margin-bottom: 15px;
  box-shadow: 0 8px 32px rgba(154, 85, 255, 0.1); /* subtle purple glow */
}


    .order-container h4 {
      color: #2e2e2e;
      margin-bottom: 15px;
    }

    .order-box {
      border: 1px solid #ddd;
      border-radius: 15px;
      padding: 15px;
      margin-bottom: 10px;
      background: #fff;
        word-wrap: break-word;
  overflow: hidden;
    }

    .order-box img {
      width: 100px;
      border-radius: 10px;
    }

    .text-purple {
      color: #9a55ff;
    }

    .bg-light-blur {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(8px);
    }
.order-box,
.stepper-item,
.step-counter {
  transition: all 0.3s ease-in-out;
}

@media (max-width: 992px) {
  .order-box {
    padding: 12px;
    margin-bottom: 12px;
  }

  .stepper-wrapper {
    flex-direction: column;
    align-items: center;
    gap: 20px;
  }

  .stepper-item::before {
    content: none;
  }

  .gradient-button {
    margin: 20px auto;
    width: 100%;
    max-width: 300px;
  }
}

@media (max-width: 768px) {
  .order-box h5, .order-box h6 {
    font-size: 1rem;
  }

  .order-box p, .order-box span, .order-box small {
    font-size: 0.9rem;
  }

  .step-counter {
    width: 35px;
    height: 35px;
    font-size: 0.9rem;
  }

  .step-name {
    font-size: 0.85rem;
    text-align: center;
  }

  .order-box img {
    width: 80px;
  }

  .modal-content {
    padding: 10px;
  }

  .stepper-wrapper {
    padding: 10px;
  }
}

@media (max-width: 576px) {
  .order-container {
    padding: 10px;
  }

  .order-box {
    flex-direction: column;
    text-align: center;
  }

  .order-box img {
    margin-bottom: 10px;
  }

  .text-purple {
    font-size: 0.9rem;
  }

  .order-box h6, .modal-title {
    font-size: 1rem;
  }

  .modal-header, .modal-body {
    padding: 10px;
  }
}


    


</style>


</head>
<body>
    
<!-- navbar -->
<div class="container-fluid p-0 overflow-auto">
<div class="row g-0">
  <!-- sidebar   -->
      <?php include 'sidebar.php';?>

<div class="col-lg-9 col-xl-10 col-12 offset-xl-2 offset-lg-3 overflow-auto">
<!-- navbar -->
<?php include 'navbar.php';?>
<!-- main content here -->

  <div class="container my-2">
    <div class="order-container">
      <h4> Order</h4>
      <p class="text-muted">Order ID: <strong>356925420</strong></p>

      <div class="row">
        <div class="col-lg-8">
          <div class="order-box d-flex align-items-center gap-3">
            <img  src="<?php echo base_url('assets/Admin/pearl.png');?>" alt="">
            <div>
              <h5 class="mb-1">Stud Earring</h5>
              <p class="mb-1 text-muted">Color: <strong>White</strong></p>
              <p class="mb-0">$1500.00</p>
            </div>
          </div>

          <div class="order-box">
            <h6>Order Summary</h6>
            <div class="d-flex justify-content-between">
              <span>Subtotal</span>
              <span>$1690.26</span>
            </div>
            <div class="d-flex justify-content-between">
              <span>Shipping Charge</span>
              <span>$60.00</span>
            </div>
            <div class="d-flex justify-content-between">
              <span>Taxes</span>
              <span>$80.00</span>
            </div>
            <div class="d-flex justify-content-between">
              <span>Discount</span>
              <span>-$10.00</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between fw-bold">
              <span>Total</span>
              <span>$1820.26</span>
            </div>
          </div>
          <div class="order-box">
             <h6 class=" mb-2 detailcolor">Order Tracking</h6>
                <div class="d-flex justify-content-between mb-3 " style="color:#915cd1; cursor:pointer; " data-bs-toggle="modal" data-bs-target="#OrderTracking">
                   Check Status
                </div>
           </div>


        </div>

        <div class="col-lg-4">
          <div class="order-box">
            <h6>Customer</h6>
            <p class="mb-0">John Smith</p>
            <small class="text-muted">1 Order</small>
          </div>

          <div class="order-box">
            <h6>Customer Information</h6>
            <p class="mb-0"><i class="fa fa-envelope text-purple me-2"></i>john.smith@gmail.com</p>
            <p><i class="fa fa-phone text-purple me-2"></i>‪+91 94256 32056‬</p>
          </div>

          <div class="order-box">
            <h6>Shipping Address</h6>
            <p class="mb-0">123 Elm Street<br> Anytown, USA 12345<br> United States</p>
            <a href="#" class="text-decoration-none text-purple">Select on map</a>
          </div>

          <div class="order-box">
            <h6>Billing Address</h6>
            <p>Same as shipping address</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
  </div>
  </div>

<div class="modal fade" id="OrderTracking" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Order Tracking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
         <div class="stepper-wrapper">

            <div class="stepper-item completed">
              <div class="step-counter"><i class="fa fa-check"></i></div>
              <div class="step-name">Order Placed</div>
            </div>
        
            <div class="stepper-item active">
              <div class="step-counter">2</div>
              <div class="step-name">Shipped</div>
            </div>
        
            <div class="stepper-item">
              <div class="step-counter">3</div>
              <div class="step-name">Out for Delivery</div>
            </div>
        
            <div class="stepper-item">
              <div class="step-counter">4</div>
              <div class="step-name">Delivered</div>
            </div>

       </div>
      </div>
    </div>
  </div>
</div>



    


  <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>

  <script>









  </script>

</body>
</html>