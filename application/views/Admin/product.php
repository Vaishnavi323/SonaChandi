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
 overflow-x: hidden;
}
    :root {
      /* Text Colors */
      --text-primary: #212529;
      --text-secondary: #6c757d;
      --text-light: #ffffff;

      /* Button Colors */
      --btn-primary-bg: #0d6efd;
      --btn-primary-hover: #0b5ed7;
      --btn-secondary-bg: #6c757d;
      --btn-secondary-hover: #5c636a;

      /* Icon Colors */
      --icon-color: #495057;
      --icon-hover-color: #0d6efd;
    }

    table {
      border-collapse: separate;
      border-spacing: 5px 7px;
      margin: 3px;

    }


    tbody tr,
    thead {
      background-color: rgb(234, 168, 193);
      border-radius: 12px;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
    }



    tbody td {
      border: none;
      padding: 1rem;
    }

    tbody td {
      border: none;
      padding: 1rem;
    }
    th{

      height:60px;
    }

    td img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 6px;
    }
               .gradient-button {
background: linear-gradient(90deg, #a259e6 0%, #6d28d9 100%);

                color: white;
      padding: 12px 15px;
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
    padding: 5px 8px;
    font-size: 10px;
  
    width: 100%;
  }

  .table-responsive-sm {
    max-height: 300px;
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

  .gradient-button {
    font-size: 15px;
    padding: 11px 22px;
    width: 80%;
    margin: 10px auto;
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

  .gradient-button {
    font-size: 16px;
    padding: 12px 25px;
  }
}


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


<div class="container-fluid px-3 mt-4">
  <div class="row align-items-center justify-content-between">
    
    <!-- Filter Dropdown -->
    <div class="col-12 col-sm-6 col-md-2 mb-2">
      <select id="ProductStatus" name="Filter" class="form-select" required>
        <option value="" disabled selected>Filter</option>
        <option value="All">All</option>
        <option value="Pending">Pending</option>
        <option value="Placed">Placed</option>
      </select>
    </div>

    <!-- Add Product Button -->
    <div class="col-12 col-sm-6 col-md-3 text-sm-end mb-2">
      <a href="<?php echo base_url('AdminController/addproduct'); ?>" class="btn  text-white gradient-button">
        <i class="fa-solid fa-plus text-white me-1"></i> Add Product
      </a>
    </div>

  </div>
</div>





        <div class="container-sm-fluid  table-responsive-sm px-3 ">
          <table class="table text-center table-sm table-borderless rounded align-middle">

            <thead class="align-middle">
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

    </div>
  </div>





  <!-- edit product form -->
  <div
    class="container-fluid h-100 t position-fixed bg-light edit-product d-none flex- column top-0  align-items-center justify-content-center"
    style="z-index:9999">

    <div class="card shadow p-4  " style="max-width: 600px; ">
      <div class=" d-flex justify-content-start w-100">
        <button class="btn btn-back "><i class="fa-solid fa-arrow-left"></i>
        </button>
      </div>

      <h4 class="text-center mb-4">Edit Product</h4>
      <form action="#" method="post" enctype="multipart/form-data">

        <div class="row">


          <div class=" col-md-6">
            <input type="text" id="productName" class="form-control mb-md-4 mb-2" placeholder="Enter product name"
              required>

          </div>
          <div class=" col-md-6">
            <input type="text" id="category" class="form-control mb-md-4 mb-2" placeholder="Enter category" readonly
              required>
          </div>

          <div class=" col-md-6">
            <input type="text" id="category" class="form-control mb-md-4 mb-2" placeholder="Enter category" readonly
              required>
          </div>

          <div class=" col-md-6">
            <input type="number" id="price" class="form-control mb-md-4 mb-2" step="0.01" placeholder="Enter price"
              required>
          </div>

          <div class=" col-md-12">
            <textarea id="description" class="form-control mb-md-4 mb-2" rows="3"
              placeholder="Enter product description"></textarea>
          </div>
          <div class=" col-md-12">
            <label class="form-label m-1">Current Image</label><br>
            <img src="<?php echo base_url(" assets/Admin/pearl.png"); ?>" alt="Product Image" style="height: 80px;"
            class="border rounded">
          </div>

          <div class=" col-md-12">
            <label for="imageUpload" class="form-label m-1">Change Image</label>
            <input type="file" id="imageUpload" class="form-control mb-md-4 mb-2">
          </div>

          <div class="text-center mt-2">

            <button class="btn  ">Update Product</button>
          </div>
        </div>
      </form>
    </div>
  </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

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
      document.querySelector(".edit-product").classList.remove("d-flex");
    });




  </script>
</body>

</html>