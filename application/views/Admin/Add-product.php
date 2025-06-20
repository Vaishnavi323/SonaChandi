<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sidebar.css'); ?>">
<style>

    .card-custom {
      border-radius: 10px;
      border: 1px solid #ccc;
      padding: 20px;
      background-color: #fff;
    }
    .dashed-box {
      border: 2px dashed #ddd;
      text-align: center;
      padding: 40px;
      border-radius: 6px;
      color: #aaa;
    }
    
    .tag-box span {
      background-color: #f0f0f0;
      padding: 5px 10px;
      margin-right: 5px;
      border-radius: 20px;
      display: inline-block;
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





</style>
</head>
  <body>
    








<div class="container p-4">
  <div class="row">
          <div class=" d-flex justify-content-start">
       <a href="<?php echo base_url('Welcome/product'); ?> " class="btn "><i class="fa-solid fa-arrow-left"></i>
  </a>
      </div>
    <!-- Left Section -->
    <div class="col-lg-8 ">
      <div class="card-custom mb-4 h-100">
        <h6><strong>Information</strong></h6>
        <div class="mb-3">
          <label class="form-label">Product Name</label>
          <input type="text" class="form-control" placeholder="Diamond ring">
        </div>
        <div class="mb-3">
          <label class="form-label">Product Description</label>
          <textarea class="form-control" rows="3" placeholder="Product description"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Images</label>
          <div class="dashed-box">
            <p><a href="#" class="text-decoration-none">Add File</a></p>
            <small>Or drag and drop files</small>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Product Price</label>
            <input type="text" class="form-control" placeholder="Enter price">
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Discount Price</label>
            <input type="text" class="form-control" placeholder="Price at Discount">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Weight</label>
            <input type="text" class="form-control" placeholder="Enter Weight">
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Country</label>
            <select class="form-select">
              <option>Select Country</option>
              <option>India</option>
              <option>USA</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Section -->
    <div class="col-lg-4">
      <div class="card-custom mb-4">
        <h6><strong>Categories</strong></h6>
        <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label">Rings</label></div>
        <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label">Earring</label></div>
        <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label">Bracelet</label></div>
        <div class="form-check"><input type="checkbox" class="form-check-input"> <label class="form-check-label">Pendant</label></div>
        <div class="form-check mb-2"><input type="checkbox" class="form-check-input"> <label class="form-check-label">Bangles</label></div>
        <a href="#" class="text-decoration-none">Create New</a>
      </div>

      <div class="card-custom mb-4">
        <h6><strong>Tags</strong></h6>
        <input type="text" class="form-control mb-2" placeholder="Enter tag name">
        <div class="tag-box">
          <span class="mb-2">Rings ✕</span>
          <span class="mb-2">Gold Coins ✕</span>
          <span class="mb-2">Women's Necklace ✕</span>
        </div>
      </div>

      <div class="card-custom">
        <h6><strong>SEO Settings</strong></h6>
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="3"></textarea>
        </div>
      </div>
    </div>
  </div>

  <!-- Save / Cancel Buttons -->
  <div class="text-end mt-3">
    <button class="btn gradient-button btn-outline-dark me-2">Cancel</button>
    <button class="btn gradient-button btn-save">Save</button>
  </div>
</div>



</div>



</div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script>



</script>
  </body>
</html>