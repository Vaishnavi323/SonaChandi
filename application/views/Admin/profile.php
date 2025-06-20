<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

<style>
  
  

  
  *
  {

    border:none;
  }

html, body {
  width: 100vw;
  height: 100vh;
  margin: 0;
  padding: 0;
display: flex;
 overflow-x: hidden;

}
    .profile-card {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
 
      
    }
    .profile-header img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
    }
    .section-title {
      font-weight: 600;
      color: #2e615c;
    }
    .form-label text-muted {
      font-weight: 500;
    }

               .gradient-button {
      background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s ease-in-out;
      box-shadow: 0 4px 10px rgba(154, 85, 255, 0.3);
    }

    .gradient-button:hover {
      opacity: 0.9;
      transform: scale(1.03);
    }

    @media (max-width: 576px) {
      .profile-header {
        flex-direction: column;
        text-align: center;
      }
    }
    .line
    {

position: relative;


    }
    .line::after
    {
      content:'';
position: absolute;
height: 1px;
width:80%;
background:;
top:50%;
margin-left:10px;
background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);
      box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.69);


    }




    .modal-content {
      border-radius: 12px;
    }

    .form-label {
      font-weight: 500;
      color: #6c757d;
    }

    .section-title {
      font-weight: 600;
      font-size: 1.25rem;
      color: #6d28d9;
    }
    </style>

</head>
<body>
    
<div class="container-fluid p-0" style=" background:#FAFAF9">
<div class="row g-0">
  <!-- sidebar   -->
      <?php include 'sidebar.php';?>

      <div class="col-lg-9 col-xl-10 col-12  shadow offset-xl-2 offset-lg-3  ">
<!-- navbar -->
<?php include 'navbar.php';?>


  <div class="container-fluid py-4 p-4">
<div class="d-flex align-items-center  pb-2 mb-4">
  <h5 class="m-0 fw-semibold fs-4 w-100  line text-dark-green">My Profile</h5>
</div>
    

    <!-- Profile Header -->
    <div class="profile-card d-flex align-items-center gap-3 flex-wrap profile-header">
      <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User">
      <div>

        <h6 class="mb-0 d-inline">Natashia Khaleira</h6>                
        <button class="btn btn-sm  gradient-button text-white"  data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit ✎</button>

        <small class="text-muted d-block">Admin</small>
        <small class="text-muted">Leeds, United Kingdom</small>
      </div>
    </div>

    <!-- Personal Info -->
    <div class="profile-card  ">
      <div class="">
        <span class="section-title">Personal Information</span>
      </div>
      <hr>
      <div class="row mt-3  g-3">
        <div class="col-md-4 flex-sm-column  p-sm-0 p-1 d-flex justify-content-between col-sm-6 mb-3">
          <label class="form-label text-muted">First Name</label>
          <div class="fw-semibold">Natashia</div>
        </div>
        <div class="col-md-4 flex-sm-column  p-sm-0 p-1 d-flex justify-content-between col-sm-6 mb-3">
          <label class="form-label text-muted">Last Name</label>
          <div class="fw-semibold">Khaleira</div>
        </div>
        <div class="col-md-4 flex-sm-column  p-sm-0 p-1 d-flex justify-content-between col-sm-6 mb-3">
          <label class="form-label text-muted">Date of Birth</label>
          <div class="fw-semibold">12-10-1990</div>
        </div>
        <div class="col-md-4 flex-sm-column  p-sm-0 p-1 d-flex justify-content-between col-sm-6 mb-3">
          <label class="form-label text-muted">Email Address</label>
          <div class="fw-semibold">info@binary-fusion.com</div>
        </div>
        <div class="col-md-4 flex-sm-column  p-sm-0 p-1 d-flex justify-content-between col-sm-6 mb-3">
          <label class="form-label text-muted">Phone Number</label>
          <div class="fw-semibold">(+62) 821 2554–5846</div>
        </div>
        <div class="col-md-4 flex-sm-column  p-sm-0 p-1 d-flex justify-content-between col-sm-6 mb-3">
          <label class="form-label text-muted">User Role</label>
          <div class="fw-semibold">Admin</div>
        </div>
        <div class="col-md-4 flex-sm-column  p-sm-0 p-1 d-flex justify-content-between col-sm-6 mb-3">
          <label class="form-label text-muted">Username</label>
          <div class="fw-semibold">natasha_admin</div>
        </div>
        <div class="col-md-4 flex-sm-column  p-sm-0 p-1 d-flex justify-content-between col-sm-6 mb-3">
          <label class="form-label text-muted">Password</label>
          <div class="fw-semibold">••••••••</div>
        </div>
      </div>
    </div>

    <!-- Address -->
    <div class="profile-card">
      <div class="d-flex justify-content-between align-items-center flex-wrap">
        <span class="section-title">Address</span>
      </div>
      <div class="row mt-3 g-3">
        <div class="col-md-4 flex-sm-column  p-sm-0 p-1 d-flex justify-content-between col-sm-6 mb-3">
          <label class="form-label text-muted">Country</label>
          <div class="fw-semibold">United Kingdom</div>
        </div>
        <div class="col-md-4 flex-sm-column  p-sm-0 p-1 d-flex justify-content-between col-sm-6 mb-3">
          <label class="form-label text-muted">City</label>
          <div class="fw-semibold">Leeds, East London</div>
        </div>

      </div>
    </div>
  </div>


  </div>
 </div>
  </div>










<!-- edit profile form -->



<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form>
        <div class="modal-body">
          <div class="section-title mb-3">Personal Information</div>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label text-muted">First Name</label>
              <input type="text" class="form-control" placeholder="Enter first name" value="Natashia">
            </div>
            <div class="col-md-6">
              <label class="form-label text-muted">Last Name</label>
              <input type="text" class="form-control" placeholder="Enter last name" value="Khaleira">
            </div>
            <div class="col-md-6">
              <label class="form-label text-muted">Date of Birth</label>
              <input type="date" class="form-control" value="1990-10-12">
            </div>
            <div class="col-md-6">
              <label class="form-label text-muted">Email Address</label>
              <input type="email" class="form-control" placeholder="Enter email" value="info@binary-fusion.com">
            </div>
            <div class="col-md-6">
              <label class="form-label text-muted">Phone Number</label>
              <input type="text" class="form-control" placeholder="Enter phone" value="(+62) 821 2554–5846">
            </div>

            <div class="col-md-6">
              <label class="form-label text-muted">Username</label>
              <input type="text" class="form-control" value="natasha_admin">
            </div>
            <div class="col-md-6">
              <label class="form-label text-muted">Password</label>
              <input type="password" class="form-control" value="secret123">
            </div>
          </div>

          <hr class="my-4">
          <div class="section-title mb-3">Address</div>
          <div class="row g-3">
            <div class="col-md-4">
              <label class="form-label text-muted">Country</label>
              <input type="text" class="form-control" value="United Kingdom">
            </div>
            <div class="col-md-4">
              <label class="form-label text-muted">City</label>
              <input type="text" class="form-control" value="Leeds, East London">
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn text-white gradient-button" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn text-white gradient-button">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



    <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>


</body>
</html>