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

:root {
  --text-primary: #212529;
  --text-secondary: #6c757d;
  --text-light: #ffffff;

  --btn-primary-bg: #0d6efd;
  --btn-primary-hover: #0b5ed7;
  --btn-secondary-bg: #6c757d;
  --btn-secondary-hover: #5c636a;

  --icon-color: #495057;
  --icon-hover-color: #0d6efd;
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
      height:60px;
    }



            tbody td {
      border: none;
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

.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1050;
  }

  .popup-box {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    max-width: 600px;
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
  table td, table th {
    font-size: 13px;
  }

  td img {
    width: 45px;
    height: 45px;
  }

  .edit-btn {
    font-size: 16px;
    padding: 4px 8px;
  }

  .gradient-button {
    background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);

    padding: 10px 20px;
    font-size: 14px;
    margin: 10px auto;
    width: 100%;
  }


}

/* Tablets (577px - 768px) */
@media (min-width: 577px) and (max-width: 768px) {
  table td, table th {
    font-size: 14px;
  }

  td img {
    width: 50px;
    height: 50px;
  }


  .table-responsive-sm {
    max-height: 400px;
  }
}

/* Small laptops (769px - 992px) */
@media (min-width: 769px) and (max-width: 992px) {
  table td, table th {
    font-size: 15px;
  }

  td img {
    width: 55px;
    height: 55px;
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


        <div class="container  m-2  d-flex justify-content-start  align-items-center p-2 pt-4">
            <form class="d-flex p-2  w-50" role="search">
              <input type="text" class="form-control rounded-start-5 p-2 rounded-end-0 border-end-0 " placeholder="Search Here" aria-label="Search user">
              <span class="input-group-text bg-white rounded-end-5 rounded-start-0 border-start-0">
                <i class="fa-solid text-dark fa-magnifying-glass"></i>
              </span>
            </form>
  </div>
        <div class="container-sm-fluid  table-responsive-sm px-3 ">
          <table class="table text-center table-sm table-borderless rounded align-middle">

  <thead class="align-middle">
    <tr>
      <th>Id</th>
      <th>Customer Name</th>
      <th>Total Orders</th>
       <th>Contact</th>
      <th>City</th>
      <th>Address</th>
      <th>Total Spend</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
        <td>Pat Black </td>
        <td>25</td>
        <td>9049978256</td>
        <td>Nashik</td>
        <td>Pandit colony</td>
        <td> 2500 </td>
        <td > 
        <i class="fa-solid fa-trash del-btn" style="cursor:pointer;"></i></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>
        <td>25</td>
        <td>9049978256</td>
        <td>Nashik</td>
        <td>Pandit colony</td>
        <td> 2500 </td>
        <td >
         <i class="fa-solid fa-trash del-btn" style="cursor:pointer;"></i></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>
        <td>25</td>
        <td>9049978256</td>
        <td>Nashik</td>
        <td>Pandit colony</td>
        <td> 2500 </td>
        <td >
         <i class="fa-solid fa-trash del-btn" style="cursor:pointer;"></i></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>
        <td>25</td>
        <td>9049978256</td>
        <td>Nashik</td>
        <td>Pandit colony</td>
        <td> 2500 </td>
       <td >
        <i class="fa-solid fa-trash del-btn" style="cursor:pointer;"></i></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Pat Black </td>
        <td>25</td>
        <td>9049978256</td>
        <td>Nashik</td>
        <td>Pandit colony</td>
        <td> 2500 </td>
        <td > 
        <i class="fa-solid fa-trash del-btn" style="cursor:pointer;"></i></td>
    </tr>
       
      


    
  </tbody>
</table>
</div>



  </div>
  </div>
  </div>

<div class="popup-overlay popup-overlay-del" style="display:none;">
  <div class="popup-box text-center p-4 bg-white rounded shadow">
    <div class="popup-icon mb-2"><i class="fas fa-exclamation fa-2x " style="color:#915cd1;"></i></div>
    <div class="popup-message fw-bold">Are you sure?</div>
    <div class="popup-sub text-muted mb-3">Do you want to delete the Customer?</div>
    <div class="popup-buttons d-flex justify-content-center gap-3">
      <button class="btn gradient-button text-white btn-yes">Yes</button>
      <button class="btn gradient-button text-white btn-cancel-del">Cancel</button>
    </div>
  </div>
</div>
  <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>


<script>
document.querySelectorAll(".del-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      document.querySelector(".popup-overlay-del").style.display = "flex";
    });
  });

  document.querySelector(".btn-cancel-del").addEventListener("click", () => {
    document.querySelector(".popup-overlay-del").style.display = "none";
  });

</script>
</body>
</html>