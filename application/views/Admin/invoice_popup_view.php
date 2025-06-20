<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Invoice Popup</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .modal-body table {
      width: 100%;
      margin-bottom: 20px;
      border-collapse: collapse;
    }
    .modal-body th, .modal-body td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }
    .right { text-align: right; }
    .highlight { color: #6a00ff; font-weight: bold; }
    .small-text { font-size: 13px; color: #555; }
  </style>
</head>
<body>

<div class="container mt-5">

  <!-- Your order box layout -->
  <div class="order-box mb-4">
    <h6 class="mb-2 detailcolor">Order Tracking</h6>
    <div class="d-flex justify-content-between mb-3" style="color:#915cd1; cursor:pointer;" data-bs-toggle="modal" data-bs-target="#OrderTracking">
      Check Status
    </div>
  </div>

  <!-- Invoice Trigger Button -->
  <div class="invoice me-auto">
    <a href="#" data-bs-toggle="modal" data-bs-target="#invoiceModal">
      Generate Invoice <i class="bi bi-eye-fill p-2"></i>
    </a>
  </div>

</div>

<!-- Invoice Modal -->
<div class="modal fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Invoice #AB2324-01</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Invoice Details -->
        <p><strong>Issued:</strong> 01 Aug 2023</p>
        <p><strong>Due:</strong> 15 Aug 2023</p>
        <p><strong>Billed To:</strong> Company Name, City, Country - 00000, +0 (000) 123-4567</p>
        <p><strong>From:</strong> Panda Inc, Business address, City, State, IN - 000000, TAX ID 00XXXXX1234XXX</p>

        <table class="table table-bordered mt-3">
          <thead>
            <tr>
              <th>Service</th>
              <th>Qty</th>
              <th>Rate</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Service A<br><span class="small-text">Description • <a href="#">Hours log ↗</a></span></td>
              <td>2</td>
              <td>$100.00</td>
              <td>$200.00</td>
            </tr>
            <tr>
              <td>Service B<br><span class="small-text">Description</span></td>
              <td>2</td>
              <td>$100.00</td>
              <td>$200.00</td>
            </tr>
          </tbody>
        </table>

        <div class="d-flex justify-content-between">
          <span>Taxes</span>
          <span>$80.00</span>
        </div>
        <div class="d-flex justify-content-between">
          <span>Discount</span>
          <span>-$10.00</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between fw-bold">
          <span>Total</span>
          <span>$1820.26</span>
        </div>

        <p class="text-muted mt-3">📅 Please pay within 15 days of receiving this invoice.</p>
        <p class="text-muted">Digital Product Designer, IN<br>+91 00000 00000 | hello@email.com</p>

      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
