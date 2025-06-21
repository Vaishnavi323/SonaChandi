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

tbody tr {
      background-color: #fff2f7; /* light pink */
    }
    td img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 6px;
    }


 table {
    border-collapse: separate;
    border-spacing: 0 7px; /* vertical space between rows */
  }

  tbody tr,thead {
    background-color:rgb(234, 168, 193);
    border-radius: 12px;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
    height:60px;
  }

  tbody td {
    border: none; 
     padding: 1rem; 
  }

  tr{
    height:50px;
    
  }

  .icons{
    color:#9C60DD;
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
      margin:0px 180px 0px 180px;
    }

    .gradient-button:hover {
      opacity: 0.9;
      transform: scale(1.03);
    }



/* Responsive adjustments */
 @media (max-width: 992px) {
  .table-responsive {
    overflow-x: auto;
  }

  table th, table td {
    font-size: 0.95rem;
    padding: 0.75rem;
  }

  select#ProductStatus {
    width: 100%;
    max-width: 250px;
    margin-bottom: 10px;
  }
}

@media (max-width: 768px) {
  table th, table td {
    font-size: 0.9rem;
    padding: 0.6rem;
  }

  .container-sm-fluid {
    padding-left: 10px;
    padding-right: 10px;
  }
}

@media (max-width: 576px) {
  .table th, .table td {
    font-size: 0.85rem;
    padding: 0.5rem;
  }

  select#ProductStatus {
    font-size: 0.9rem;
    max-width: 100%;
    margin-bottom: 12px;
  }

  .icons {
    font-size: 1rem;
  }
}
 


 

</style>


</head>
<body>
    
<div class="container-fluid p-0">
<div class="row g-0">
  <!-- sidebar   -->
      <?php include 'sidebar.php';?>

      <div class="col-lg-9 col-xl-10 col-12 offset-xl-2 offset-lg-3 text-white ">
<!-- navbar -->
<?php include 'navbar.php';?>
<!-- main content here -->




<div class="container-fluid px-3 mt-4">
  <div class="row">
    <div class="col-6   col-sm-2 ">
      <div class="my-2">
        <select id="ProductStatus" name="Filter" class="form-select" required>
          <option value="" disabled selected>Filter</option>
          <option value="All">All</option>
          <option value="Pending">Pending</option>
          <option value="Placed">Placed</option>
        </select>
      </div>
    </div>
  </div>
</div>


        

<div class="container-sm-fluid  px-3 table-responsive px-md-3 px-0 my-2">
  <table class="table text-center table-sm   rounded align-middle" >
  <thead class="">
    <tr>
      <th>Id</th>
      <th>Customer Name</th>
      <th>Contact</th>
      <th>City</th>
      <th>Pin</th>
      <th>Date</th>
      <th>Total</th>
      <th>Status</th>

    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
        <td>Pat Black </td>

        <td>9049978256</td>
        <td>Nashik</td>
        <td>431122</td>
        <td>17/03/2025</td>
        <td> $22 </td>
        <td> <a href="<?php echo site_url('AdminController/OrderDetails'); ?>">
          <i class="fa-solid fa-truck icons"></i>
        </a> 
        </td>

    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>

        <td>9049978256</td>
        <td>Nashik</td>
        <td>431122</td>
        <td>17/03/2025</td>
        <td> $22 </td>
       <td> <a href="<?php echo site_url('AdminController/OrderDetails'); ?>">
          <i class="fa-solid fa-truck icons"></i>
        </a> 
        </td>

    </tr>
   <tr>
        <td>1</td>
        <td>Pat Black </td>

        <td>9049978256</td>
        <td>Nashik</td>
        <td>431122</td>
        <td>17/03/2025</td>
        <td> $22 </td>
        <td> <a href="<?php echo site_url('AdminController/OrderDetails'); ?>">
          <i class="fa-solid fa-truck icons"></i>
        </a> 
        </td>

    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>

        <td>9049978256</td>
        <td>Nashik</td>
        <td>431122</td>
        <td>17/03/2025</td>
        <td> $22 </td>
        <td> <a href="<?php echo site_url('AdminController/OrderDetails'); ?>">
          <i class="fa-solid fa-truck icons"></i>
        </a> 
        </td>

    </tr>
  <tr>
        <td>1</td>
        <td>Pat Black </td>

        <td>9049978256</td>
        <td>Nashik</td>
        <td>431122</td>
        <td>17/03/2025</td>
        <td> $22 </td>
        <td> <a href="<?php echo site_url('AdminController/OrderDetails'); ?>">
          <i class="fa-solid fa-truck icons"></i>
        </a> 
        </td>

    </tr>
       
      


    <!-- Repeat -->
  </tbody>
</table>



</div>

</div>
</div>






    


  <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>

  <script>









  </script>

</body>
</html> 