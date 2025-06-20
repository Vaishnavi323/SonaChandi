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
    

 color:green;
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




  
  
  
  



    
    
    
    
    
    


    table {
      border- collapse: separate;
      border-spacing: 5px 7px;
      margin:3px
    
    }

    tbody tr,
    thead {
      background- color: rgb(234, 168, 193);
      border-radius: 12px;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
    }
     .btn {
       color: white;
      font-weight: 500;

      background: linear-gradient(180deg, rgba(106, 15, 224, 0.47) 0%, rgba(95, 72, 126, 0.42) 100%);
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;


    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(106, 15, 224, 0.47);
    }

        tbody td {
      border: none;
      /* ensure borderless cells */
      padding: 1rem;
    }

        tbody td {
      border: none;
      padding: 1rem;
    }





   .table-condensed {
      font-size: 0.875rem;
    
    }

    .table-condensed th,
    .table-condensed td {
      padding: 0.3rem;
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

        .table  {
font-size:0.6rem;


    }

.table-wrapper
{
  overflow-X:scroll;
  padding:2px;
}
tr
{

  height:20px;
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
    tr
{
  height:20px;
}


 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 80%;
margin-left:20%;
}
tr
{
  height:30px;
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
tr
{
  height:50px;
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
tr
{
  height:60px;
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
tr
{
  height:60px;
}


}


    .popup-overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      backdrop-filter: blur(6px);
      background-color: rgba(255, 255, 255, 0.2);
      z-index: 999;
      display: none;
      justify-content: center;
      align-items: center;
    }

    .popup-box {
      background-color: white;
      border-radius: 12px;
      padding: 30px;
      width: 350px;
      text-align: center;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      z-index: 1000;
    }

    .popup-icon {
      width: 60px;
      height: 60px;
      background-color: #d9b3ff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }

    .popup-icon i {
      font-size: 28px;
      color: #7c00b3;
    }

    .popup-message { font-weight: 600; font-size: 16px; margin-bottom: 10px; }
    .popup-sub { font-size: 14px; margin-bottom: 20px; color: #444; }

    .popup-buttons .btn {
      min-width: 100px;
      border-radius: 20px;
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
        <div class="container px-3 my-4">
          <table class="table text-center table-borderless align-middle">
            <thead>
              <tr>
                <th>Id</th>
                <th>Customer Name</th>
                <th>Contact</th>
                <th>Total Orders</th>
                <th>Plan</th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td>1</td>
                <td>Pat Black</td>
                <td>9865896589</td>
                <td>25</td>
                <td>₹ 2500 </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Pat Black</td>
                <td>9865896589</td>
                <td>25</td>
                <td>₹ 2500 </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Pat Black</td>
                <td>9865896589</td>
                <td>25</td>
                <td>₹ 2500 </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Pat Black</td>
                <td>9865896589</td>
                <td>25</td>
                <td>₹ 2500 </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Pat Black</td>
                <td>9865896589</td>
                <td>25</td>
                <td>₹ 2500 </td>
              </tr>
             
            </tbody>
          </table>
        </div>
  </div>

  <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>

  <script>







  </script>

</body>
</html>