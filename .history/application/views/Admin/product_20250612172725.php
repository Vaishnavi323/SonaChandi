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
    td img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 6px;
    }


    table {
      border-collapse :separate;
      border-spacing: 5px 7px;
      margin:3px;
    
    }

    tbody tr,
    thead {
      background-color: rgb(234, 168, 193);
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




td img{

      width: 30px;
      height: 30px;

}

.edit-product{

height:400px;

}
.card input{

font-size:0.6rem;


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



        <div class="container-fluid  m-2  d-flex justify-content-start  align-items-center p-2">
          <form class="d-flex p-2  w-50" role="search">
            <input type="text" class="form-control rounded-start-5 p-2 rounded-end-0 border-end-0 text-center "
              style=" border:1px solid  rgba(106, 15, 224, 0.47); " placeholder="Search user" aria-label="Search user">
            <span class="input-group-text bg-white rounded-end-5 rounded-start-0 border-start-0"
              style=" border:1px solid  rgba(106, 15, 224, 0.47); ">
              <i class="fa-solid text-dark fa-magnifying-glass fs-5 text-muted"></i>
            </span>
          </form>
        </div>
        <div class="container  px-3">
          <div class="d-flex">
          
          <div class=" col-md-2  col-sm-2 my-2">
<select id="ProductStatus" name="Filter" class="form-select btn" required>
<option value="" disabled selected class="">Filter</option>
<option value="All">All</option>
<option value="Out Of Stock">Out Of Stock</option>
<option value="In Stock">In Stock</option>
</select>
 </div>
 <div class="ms-auto me-1">
         <a href="<?php echo base_url('Welcome/addproduct'); ?> " class="btn "><i class="fa-solid fa-plus fs-5 rounded"></i></a>

            </div>
          </div>
        </div>





                <div class="container-fluid w-100   px-3 ">
          <table class="table text-center   table-condensed table-borderless rounded align-middle">
            <thead class="">
              <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Qty.</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>12ES</td>
                <td><img src="<?php echo base_url('assets/Admin/pearl.png'); ?>" alt="Product" width="60" height="60"
                    style="object-fit: cover; border-radius: 8px;"></td>

                <td>Studs</td>
                <td>Rings</td>
                <td>$44</td>
                <td>12k</td>
                <td> <button class="btn "><i class="fa-regular edit-btn fa-pen-to-square fs-5 rounded "></i></button>
                </td>
              </tr>

                            <tr>
                <td>12ES</td>
                <td><img src="<?php echo base_url('assets/Admin/pearl.png'); ?>" alt="Product" width="60" height="60"
                    style="object-fit: cover; border-radius: 8px;"></td>

                <td>Studs</td>
                <td>Rings</td>
                <td>$44</td>
                <td>12k</td>
                <td> <button class="btn "><i class="fa-regular edit-btn fa-pen-to-square fs-5 rounded "></i></button>
                </td>
              </tr>


                            <tr>
                <td>12ES</td>
                <td><img src="<?php echo base_url('assets/Admin/pearl.png'); ?>" alt="Product" width="60" height="60"
                    style="object-fit: cover; border-radius: 8px;"></td>

                <td>Studs</td>
                <td>Rings</td>
                <td>$44</td>
                <td>12k</td>
                <td> <button class="btn "><i class="fa-regular edit-btn fa-pen-to-square fs-5 rounded "></i></button>
                </td>
              </tr>
                            <tr>
                <td>12ES</td>
                <td><img src="<?php echo base_url('assets/Admin/pearl.png'); ?>" alt="Product" width="60" height="60"
                    style="object-fit: cover; border-radius: 8px;"></td>

                <td>Studs</td>
                <td>Rings</td>
                <td>$44</td>
                <td>12k</td>
                <td> <button class="btn "><i class="fa-regular edit-btn fa-pen-to-square fs-5 rounded "></i></button>
                </td>
              </tr>
</tbody>
</table>
</div>


</div>





<div class="container-fluid h-100 t position-fixed bg-light edit-product d-none flex- column top-0  align-items-center justify-content-center" style="z-index:9999">

  <div class="card shadow p-4  " style="max-width: 600px; ">
            <div class=" d-flex justify-content-start w-100">
        <button class="btn btn-back "><i class="fa-solid fa-arrow-left"></i>
        </button>
  </div>

    <h4 class="text-center mb-4">Edit Product</h4>
    <form action="#" method="post" enctype="multipart/form-data">

<div class="row">
    
      
    <div class=" col-md-6">
        <input type="text" id="productName" class="form-control mb-md-4 mb-2" placeholder="Enter product name" required>

  </div>
   <div class=" col-md-6">
 <input type="text" id="category" class="form-control mb-md-4 mb-2" placeholder="Enter category" readonly  required>
      </div>

      <div class=" col-md-6">
        <input type="text" id="category" class="form-control mb-md-4 mb-2" placeholder="Enter category" readonly  required>
      </div>

   <div class=" col-md-6">
        <input type="number" id="price" class="form-control mb-md-4 mb-2" step="0.01" placeholder="Enter price" required>
      </div>

 <div class=" col-md-12">
        <textarea id="description" class="form-control mb-md-4 mb-2" rows="3" placeholder="Enter product description"></textarea>
      </div>
 <div class=" col-md-12">
        <label class="form-label m-1">Current Image</label><br>
        <img src="<?php echo base_url("assets/Admin/pearl.png"); ?>" alt="Product Image" style="height: 80px;" class="border rounded">
      </div>

      <div class=" col-md-12">
        <label for="imageUpload" class="form-label m-1">Change Image</label>
        <input type="file" id="imageUpload" class="form-control mb-md-4 mb-2">
      </div>

      <div class="text-center mt-2">

        <button  class="btn  ">Update Product</button>
      </div>
  </div>
    </form>
  </div>
</div>

    


  <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>

  <script>






        document.querySelectorAll(".edit-btn").forEach(btn => {
      btn.addEventListener("click", () => {
        document.querySelector(".edit-product").classList.remove("d-none");
        document.querySelector(".edit-product").classList.add("d-flex");
      });
    });

    document.querySelector(".btn-back").addEventListener("click", () => {
      document.querySelector(".edit-product").classList.add("d-none");
      document.querySelector(".edit-product").classList.remove("d-flex");});




  </script>

</body>
</html>