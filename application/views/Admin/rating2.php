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
    .icons
    {

color:rgba(229, 188, 24, 0.94);

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
    }

    .gradient-button:hover {
      opacity: 0.9;
      transform: scale(1.03);
    }

/* Scrollable table wrapper */
.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: thin;
}

/* Optional: nice scroll style */
.table-responsive::-webkit-scrollbar {
  height: 6px;
}
.table-responsive::-webkit-scrollbar-thumb {
  background: #9a55ff;
  border-radius: 10px;
}

/* Responsive tweaks */
@media (max-width: 991.98px) {
  .table th, .table td {
    padding: 0.6rem;
    font-size: 0.9rem;
  }

  .popup-box {
    width: 90%;
    padding: 20px;
  }

  .popup-buttons {
    flex-direction: column;
    gap: 10px;
  }

  .popup-buttons .btn {
    width: 100%;
    font-size: 0.9rem;
  }
}

@media (max-width: 576px) {
  .table th, .table td {
    padding: 0.5rem;
    font-size: 0.8rem;
    white-space: nowrap;
  }

  .popup-box {
    width: 95%;
    padding: 16px;
  }

  .popup-message {
    font-size: 14px;
  }

  .popup-sub {
    font-size: 12px;
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


        <div class="container table-responsive-sm px-3 my-4  pt-4">
          <table class="table text-center table-sm-borderless align-middle">
            <thead>
              <tr>
                <th>Sr No.</th>
                <th>Customer Name</th>
                <th>Feedback</th>
                <th>Rating</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Pat Black</td>
                <td>Very Good Product</td>
                <td class="fs-5"><p class="icons">★ ★ ★ ★ ★</p></td>
                <td>
                  <i class="fa-solid fa-square-check  add-btn fs-5" style="cursor:pointer;"></i>
                  <i class="fa-solid fa-square-xmark  remove-btn fs-5" style="cursor:pointer;"></i>
                </td>
              </tr>
               <tr>
                <td>1</td>
                <td>Pat Black</td>
                <td>Very Good Product</td>
                <td class="fs-5"><p class="icons">★ ★ ★ ★ ★</p></td>
                <td>
                  <i class="fa-solid fa-square-check  add-btn fs-5" style="cursor:pointer;"></i>
                  <i class="fa-solid fa-square-xmark  remove-btn fs-5" style="cursor:pointer;"></i>
                </td>
              </tr>
               <tr>
                <td>1</td>
                <td>Pat Black</td>
                <td>Very Good Product</td>
                <td class="fs-5"><p class="icons">★ ★ ★ ★ ★</p></td>
                <td>
                  <i class="fa-solid fa-square-check  add-btn fs-5" style="cursor:pointer;"></i>
                  <i class="fa-solid fa-square-xmark  remove-btn fs-5" style="cursor:pointer;"></i>
                </td>
              </tr>
               <tr>
                <td>1</td>
                <td>Pat Black</td>
                <td>Very Good Product</td>
                <td class="fs-5"><p class="icons">★ ★ ★ ★ ★</p></td>
                <td>
                  <i class="fa-solid fa-square-check  add-btn fs-5" style="cursor:pointer;"></i>
                  <i class="fa-solid fa-square-xmark  remove-btn fs-5" style="cursor:pointer;"></i>
                </td>
              </tr>
               <tr>
                <td>1</td>
                <td>Pat Black</td>
                <td>Very Good Product</td>
                <td class="fs-5"><p class="icons">★ ★ ★ ★ ★</p></td>
                <td>
                  <i class="fa-solid fa-square-check  add-btn fs-5" style="cursor:pointer;"></i>
                  <i class="fa-solid fa-square-xmark  remove-btn fs-5" style="cursor:pointer;"></i>
                </td>
              </tr>
            </tbody>
          </table>
        </div>







  </div>
  </div>
  </div>

  <div class="popup-overlay popup-overlay-remove" style="display:none;">
    <div class="popup-box">
      <div class="popup-icon"><i class="fas fa-exclamation"></i></div>
      <div class="popup-message">Are you sure?</div>
      <div class="popup-sub">Do you want to remove this review on the user side?</div>
      <div class="popup-buttons d-flex justify-content-center gap-3">
        <button class="btn gradient-button btn-yes">Yes</button>
        <button class="btn gradient-button btn-cancel">Cancel</button>
      </div>
    </div>
  </div>

  <!-- Add Confirmation Popup -->
  <div class="popup-overlay popup-overlay-add" style="display:none;">
    <div class="popup-box">
      <div class="popup-icon"><i class="fas fa-exclamation"></i></div>
      <div class="popup-message">Are you sure?</div>
      <div class="popup-sub">Do you want to add this review on the user side?</div>
      <div class="popup-buttons d-flex justify-content-center gap-3">
        <button class="btn gradient-button btn-yes">Yes</button>
        <button class="btn gradient-button btn-cancel">Cancel</button>
      </div>
    </div>
  </div>


    


  <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>

  <script>



document.querySelectorAll(".remove-btn").forEach(btn => {
      btn.addEventListener("click", () => {
        document.querySelector(".popup-overlay-remove").style.display = "flex";
      });
    });

    document.querySelector(".popup-overlay-remove .btn-cancel").addEventListener("click", () => {
      document.querySelector(".popup-overlay-remove").style.display = "none";
    });

    // Add popup logic
    document.querySelectorAll(".add-btn").forEach(btn => {
      btn.addEventListener("click", () => {
        document.querySelector(".popup-overlay-add").style.display = "flex";
      });
    });

    document.querySelector(".popup-overlay-add .btn-cancel").addEventListener("click", () => {
      document.querySelector(".popup-overlay-add").style.display = "none";
    });




  </script>

</body>
</html>