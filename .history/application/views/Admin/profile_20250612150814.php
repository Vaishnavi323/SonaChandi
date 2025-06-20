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
  width: 100vw;
  height: 100vh;
  margin: 0;
  padding: 0;
display: flex;
 overflow-x: hidden;
}
#sidebar
{


width: 15%;

    background-color: #a678e2;
border-bottom-right-radius:5px ;
border-top-right-radius: 5px;

height:100vh;

position: fixed;
top: 0;
left:0;
z-index: 10;


}
.main{
width: 85%;

}



    .profile-box
    {

    
       background: white;
 border-radius: 10px;

    }

    .profile-box h5 {

        
    }

    .card-form {
      background: white;
      border-radius: 10px;
      padding: 20px 30px;
      max-width: 600px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .btn-save {
      background-color: #c39cff;
      color: white;
      border: none;
      width: 100px;
    }

    .btn-save:hover {
      background-color: #a875e0;
    }

    .edit-btn {
      font-size: 12px;
      padding: 3px 8px;
       background-color: #c39cff;

    }
.img-box
{

    height:100%;
    width:10%;


}

.img-box img{

object-fit:cover;
 height:100%;
 width:100%;

}


    .glass-card {
      background: rgba(255, 255, 255, 0.88);
    
          backdrop-filter: blur(10px);

      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
   
      max-width: 700px;
      width: 90%;
      border: 1px solid rgba(255, 255, 255, 0.18);
    }


    .btn-save {
      background-color: #c39cff;
      border: none;
      color: white;
      padding: 6px 25px;
    }

    .btn-save:hover {
      background-color: #a875e0;
    }

    .form-label {
      font-weight: 500;
    }

    .form-control {
      background-color: rgba(33, 31, 31, 0.16);
      
      border: none;
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.7);
      box-shadow: none;
    }

    .change-password {
      color: #a65ff0;
      font-size: 14px;
      text-decoration: underline;
      cursor: pointer;
    }

    .avatar {
      width: 80px;
      height: 80px;
      margin: 0 auto 15px;
      border-radius: 50%;
    background:#EBD7BD;

    }

    .change-password:hover {
      color: #7e45c5;
    }
.close
{
 background-color: #c39cff;

}
.edit-profile
{
          backdrop-filter: blur(6px);
}
  
  
  
  


     .btn {
       color: white;
      font-weight: 500;

      background: linear-gradient(180deg, rgba(106, 15, 224, 0.47) 0%, rgba(95, 72, 126, 0.42) 100%);
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;


    }



@media (max-width: 575.98px) {
 

        #sidebar
{

position: fixed;
top: 0;
left:0;
z-index: 10;
width: 20vh;
display: none;
min-height:100vh;
}
.main{
width:100vw;
    
}


.img-box img{

transform:translate(-40%);

}

.glass-card
{

    margin-top:20px;
  height:auto;
  


}

.glass-card label
{
display:none;

}
.glass-card input{

  font-size:.8rem;
}

}


@media (min-width: 576px) and (max-width: 767.98px) {
 

    #sidebar
{
height:100vh;

position: fixed;
top: 0;
left:0;
z-index: 10;
width: 20vw;
display:none ;
}
.main{
width:100%;
    
}
}


@media (min-width: 768px) and (max-width: 991.98px) {
        #sidebar
    {

height:100vh;
width: 20%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 80%;
margin-left:20%;
}
.text {

margin-left:80px;

}
  
}

@media (min-width: 992px) and (max-width: 1199.98px) {


        #sidebar
    {

height:100vh;
width: 15%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 85%;
margin-left:15%;

}
.text{
margin-left:80px;

}

}

@media (min-width: 1200px) and (max-width: 1399.98px) {


        #sidebar
    {

height:100vh;
width: 15%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 85%;
margin-left:14%;

}



}


@media (min-width: 1400px) {


    #sidebar
    {

height:100vh;
width: 15%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 85%;
margin-left:15%;


}



}

</style>


</head>
<body>
    
<div id="sidebar">
  <div class="d-flex d-md-none justify-content-end p-2 b">
    <button class="btn p-2" id="sidebarToggle" style="background: transparent; border: none;">
      <i class="fa-solid fa-xmark  text-dark" onclick="hideSidebar()"></i>
    
    </button>
  </div>

        <?php include 'sidebar.php'; ?>
      
    
    </div>
<div class="main">

<div class="container-fluid shadow-sm d-flex justify-content-between justify-content-sm-end align-items-center p-2">
  <div class="d-md-none p-2 bg-light">
    <button class="btn p-2" id="sidebarToggle" style="background: transparent; border: none;">
      <i class="fas fa-bars fs-4 text-dark" onclick="showSidebar()"></i>
    </button>
  </div>
        <?php include 'navbar.php'; ?>

</div>


<h4 class="ms-md-5 m-4">
    Profile
</h4>

<div class="d-flex flex-column flex-md-row align-items-center align-items-md-start mb-4 mx-3 profile-box px-3 px-md-5 py-4  shadow-sm" >
  <div class="img-box me-md-4 mb-3 mb-md-0 text-center">
    <img src="<?php echo base_url('assets/images/Avatar.png'); ?>" alt="User Image"
         class="img-fluid rounded-circle shadow-lg border border-white" style="max-width: 200px; max-height: 200px;min-width: 100px;min-height: 100px;  object-fit: cover;">
  </div>

  <div class="text-center text text-md-start">
    <h5 class="fw-bold mb-2">
      User Name 
      <button class="btn btn-sm ms-2 edit-btn1" >
        <i class="bi bi-pencil"></i> Edit
      </button>
    </h5>
    <p class="mb-1 ">example@example.com</p>
    <small class="text-light-emphasis">M 12 yrs</small>
  </div>
</div>






</div>


<div class="container-fluid h-100 d-none position-fixed edit-profile top-0 align-items-center justify-content-center" style="z-index:11" >



  <div class="glass-card border shadow ">
  <div class=" d-flex justify-content-end">
<i class="fa-solid close shadow fs-4 p-1 px-2 border rounded-circle fa-xmark"></i>
    
</div>
    <h5 class="mb-3 text-center">User Profile</h5>

    <div class="avatar shadow">

<img src="<?php echo base_url('assets/images/UserImg.png'); ?>" class=" rounded-circle  border" style="height:100%;width:100%;
object-fit:cover;" alt="" srcset="">

    </div>

    <form>
      <div class="row g-3 text-start">
        <div class="col-md-6">
          <label class="form-label">Name</label>
          <input type="text" class="form-control text-muted py-2" placeholder="Name" >
        </div>
        <div class="col-md-6">
          <label class="form-label">Contact</label>
          <input type="text" class="form-control"  placeholder="Contact">
        </div>
        <div class="col-md-6">
          <label class="form-label">Password</label>
          <div style="position:relative;">
          <input type="password" class="form-control"  placeholder="Password" >
          <i class="fa-solid fa-eye-slash" style="position:absolute; top:50%;
          right:5px;transform:translateY(-50%);color: #c39cff"></i>
</div>
        </div>
        <div class="col-md-6">
               <label class="form-label">Email</label>

          <input type="email" class="form-control"  placeholder="Email" >
        </div>
      </div>

      <div class="text-start mt-2">
        <a class="change-password">Change Password</a>
      </div>

      <div class="text-center mt-4">
        <button type="submit" class="btn btn-save">Save</button>
      </div>
    </form>
  </div>



</div>



    


  <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>

  <script>



document.querySelector(".edit-btn1").addEventListener("click", function () {
      const element = document.querySelector(".edit-profile");
       element.classList.remove("d-none");
  element.classList.add("d-flex");
    });
        document.querySelector(".close").addEventListener("click", function () {
      const element = document.querySelector(".edit-profile");
 element.classList.add("d-none");
        element.classList.remove("d-flex");

    });







  </script>

</body>
</html>