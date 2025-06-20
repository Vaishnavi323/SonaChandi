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



            .notification-card {
      border-left: 4px solid #915cd1;
      background-color: #f8f9fa;
      border-radius: 8px;
      padding: 10px 15px;
      margin-bottom: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }
    .message {
      font-size: 1rem;
      color: #333;
    }
    .timestamp {
      font-size: 0.85rem;
      color: gray;
    }
    i{
color: #915cd1;

    }

</style>
</head>
<body>
    
  <div>
         <i class="fa-solid fa-bell p-2 me-3 fs-4" style="cursor:pointer;"  data-bs-toggle="modal" data-bs-target="#notificationModal"></i>
  <a href="<?php echo site_url('Welcome/profile');?>" class=" text-dark "><i class="fa-regular  fa-user p-2 me-3 fs-4"></i></a>     
  </div>
  <div class="modal fade" id="notificationModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
               
        <div class="notification-card d-flex align-items-start">
            <div class="message"> <strong>Ring</strong> is out of stock.</div>
            <div class="timestamp">Just now</div>
        </div>

       
        <div class="notification-card d-flex align-items-start">
            <div class="message">New order placed successfully.</div>
            <div class="timestamp">5 mins ago</div>
        </div>

       
        <div class="notification-card d-flex align-items-start">
            <div class="message">A new user has signed up.</div>
            <div class="timestamp">15 mins ago</div>
        </div>
        <div class="notification-card d-flex align-items-start">
            <div class="message">New order placed successfully.</div>
            <div class="timestamp">5 mins ago</div>
        </div>

       
        <div class="notification-card d-flex align-items-start">
            <div class="message">A new user has signed up.</div>
            <div class="timestamp">15 mins ago</div>
        </div>
        <div class="notification-card d-flex align-items-start">
            <div class="message">New order placed successfully.</div>
            <div class="timestamp">5 mins ago</div>
        </div>

       
        <div class="notification-card d-flex align-items-start">
            <div class="message">A new user has signed up.</div>
            <div class="timestamp">15 mins ago</div>
        </div>

      </div>
    </div>
  </div>
</div>

    



</body>
</html>