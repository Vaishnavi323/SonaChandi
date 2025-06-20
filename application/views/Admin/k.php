<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sidebar Accordion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    <style>
.profile {
      text-align: center;
      width: 100%;
      margin-bottom: 30px;
    }

     .profile img {
      width: 100px;
      height: 100px;

       border-radius: 50%;
      object-fit: cover;
      background-color:#ffffff;
    }
    .nav-item  a
    {


    }




    #sidebar {
 

      
      position:fixed;
      top:0; left:0;
      height:auto;
      transition:transform .25s ease-in-out;
      z-index:10; 
            background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);

             
    }

.nav-item .link {
 
 
  font-size:20px;

 

}
.nav 
{
  border:none;

}
.nav-item .link:hover {
  border-top-left-radius: 25px;
  border-bottom-left-radius: 25px;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  /* background-color: white; */

  color:  #9a55ff !important;
text-shadow: 4px 0px 6px rgba(0,0,0,0.32);

}

.btn1
{

     background: linear-gradient(to right, #da8cff, #9a55ff);
     color:white;

}





@media (max-width: 768px) {

   #sidebar{   position:fixed;
      top:0; left:0;
      height:auto;
      width:200px;
      overflow-Y:auto;
      transition:transform .25s ease-in-out;
      z-index:1050; 
background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);

}

}

    </style>

  </style>
</head>
<body>

  <!-- Sidebar -->
<aside  class="d-flex bg-purple h-100 col-xl-2 col-md-3 d-lg-block   d-none flex-column  " id="sidebar">
      <!-- Product Menu -->

          <button class="accordion-button collapsed bg-transparent px-0" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseProduct">
            Product
          </button>
        </h2>
        <div id="collapseProduct" class="accordion-collapse bg-white collapse">
          <div class=" px-0 pt-1 pb-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="text-dark " href="<?php echo site_url('AdminController/product'); ?>">Manage Product</a>
              </li>
              <li class="nav-item">
                <a class="text-dark" href="<?php echo site_url('AdminController/addproduct'); ?>">Add Product</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Another Example Menu -->
      <div class="accordion-item border-0 mt-2">
        <h2 class="accordion-header" id="headingUsers">
          <button class="accordion-button collapsed bg-transparent px-0" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseUsers">
            Users
          </button>
        </h2>
        <div id="collapseUsers" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
          <div class="accordion-body px-0 pt-1 pb-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">Manage Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Add User</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>

  <!-- Main Content -->

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
