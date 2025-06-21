<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product Modal</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" />

    <!-- Custom Styles -->
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

    <!-- Trigger Button -->
    <div class="container mt-5">
      <button type="button" class="btn gradient-button" data-bs-toggle="modal" data-bs-target="#addProductModal">
        <i class="fa-solid fa-plus"></i> Add Product
      </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="container p-2">
                <div class="row">
                  <!-- Left Section -->
                  <div class="col-lg-8">
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
                    <div class="card-custom mb-4 mt-4">
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
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn gradient-button">Save Product</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
