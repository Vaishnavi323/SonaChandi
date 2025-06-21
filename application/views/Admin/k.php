<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Enhanced Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>

  <style>
    :root {
      --purple-light: #f6efff;
      --purple-main: #9a55ff;
      --accent: #ff5c8d;
      --bg-light: #f3f4f6;
      --radius: 12px;
    }

    body {
      background: var(--bg-light);
      font-family: 'Segoe UI', sans-serif;
      color: #333;
    }

    h5.section-title {
      font-weight: 600;
      margin-bottom: 12px;
      color: #222;
    }

    .card-stats {
      background: white;
      border-radius: var(--radius);
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      transition: transform 0.2s;
    }
    .card-stats:hover {
      transform: translateY(-3px);
    }
    .card-stats .icon-circle {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: var(--purple-main);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.4rem;
      margin-right: 16px;
    }
    .card-stats .stat-value {
      font-size: 1.7rem;
      font-weight: 600;
    }
    .card-stats .stat-label {
      color: #666;
      font-size: 0.9rem;
    }

    .chart-container {
      background: white;
      border-radius: var(--radius);
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .nav-tabs .nav-link.active {
      background: var(--purple-light);
      color: var(--purple-main);
    }

    .mini-card {
      background: white;
      border-radius: var(--radius);
      padding: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.04);
      text-align: center;
    }
    .mini-card .avatar-sm {
      width: 42px;height:42px;
      border-radius: 50%;
      background: var(--purple-light);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--purple-main);
      font-size: 1rem;
      margin-bottom: 8px;
    }

    .table thead th {
      font-weight: 600;
      color: var(--purple-main);
      border-bottom: none;
    }
    .table tbody tr:hover {
      background: #fafafa;
    }
    .progress {
      height: 6px;
      border-radius: 3px;
    }
    .progress-bar {
      border-radius: 3px;
    }
  </style>
</head>
<body>

<div class="container-fluid py-4">
  <div class="container">

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
      <div class="col-md-3">
        <div class="card-stats d-flex align-items-center p-3">
          <div class="icon-circle"><i class="fa-solid fa-file-lines"></i></div>
          <div>
            <div class="stat-value">75</div>
            <div class="stat-label">Total Orders</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-stats d-flex align-items-center p-3">
          <div class="icon-circle"><i class="fa-solid fa-user-group"></i></div>
          <div>
            <div class="stat-value">120</div>
            <div class="stat-label">Total Clients</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-stats d-flex align-items-center p-3">
          <div class="icon-circle"><i class="fa-solid fa-truck"></i></div>
          <div>
            <div class="stat-value">60</div>
            <div class="stat-label">Total Delivered</div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card-stats d-flex align-items-center p-3">
          <div class="icon-circle"><i class="fa-solid fa-dollar-sign"></i></div>
          <div>
            <div class="stat-value">$1.8K</div>
            <div class="stat-label">Total Revenue</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Top Products + Expense Chart -->
    <div class="row g-4 mb-4">
      <div class="col-lg-8">
        <div class="chart-container p-3">
          <h5 class="section-title">Top Products</h5>
          <div class="table-responsive">
            <table class="table align-middle">
              <thead>
                <tr><th>#</th><th>Name</th><th>Popularity</th><th class="text-end">Sales</th></tr>
              </thead>
              <tbody>
                <tr><td>01</td><td>Twisted Ring</td><td><div class="progress"><div class="progress-bar bg-primary" style="width:90%"></div></div></td><td class="text-end text-primary">45%</td></tr>
                <tr><td>02</td><td>Golden Studs</td><td><div class="progress"><div class="progress-bar bg-success" style="width:75%"></div></div></td><td class="text-end text-success">29%</td></tr>
                <tr><td>03</td><td>Butterfly Pendant</td><td><div class="progress"><div class="progress-bar" style="background:var(--purple-main);width:45%"></div></div></td><td class="text-end" style="color:var(--purple-main)">18%</td></tr>
                <tr><td>04</td><td>Traditional Necklace</td><td><div class="progress"><div class="progress-bar bg-warning" style="width:55%"></div></div></td><td class="text-end text-warning">25%</td></tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <div class="row g-3">
          <h5 class="pt-3" >Top Clients</h5>
          <div class="col-6 col-sm-4 col-lg-3">
            <div class="mini-card">
              <div class="avatar-sm"><i class="fa-solid fa-user"></i></div>
              <div class="fw-semibold">Aditi T</div>
              <small class="text-muted">(ID: 2)</small><br>
              <small class="text-muted">Ordered: 3</small>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-lg-3">
            <div class="mini-card">
              <div class="avatar-sm"><i class="fa-solid fa-user"></i></div>
              <div class="fw-semibold">Aditi T</div>
              <small class="text-muted">(ID: 2)</small><br>
              <small class="text-muted">Ordered: 3</small>
            </div>
          </div>
        </div>
        
      </div>
      
      <div class="col-lg-4">
        <div class="chart-container p-3">
          <h5 class="section-title">Expenses</h5>
          <ul class="nav nav-pills mb-3 tab-pill justify-content-center">
            <li class="nav-item"><button class="nav-link">Daily</button></li>
            <li class="nav-item"><button class="nav-link active">Weekly</button></li>
            <li class="nav-item"><button class="nav-link">Monthly</button></li>
          </ul>
          <canvas id="expenseChart" height="200"></canvas>
        </div>
      </div>
    </div>

    <!-- Clients & Requests -->

      <div class="col-lg-4">
        <h5 class="section-title">Client Requests</h5>
        <div class="d-flex flex-column gap-3">
          <div class="mini-card d-flex align-items-center gap-3">
            <div class="avatar-sm" style="width:36px;height:36px;font-size:14px"><i class="fa-solid fa-user"></i></div>
            <div class="flex-grow-1">Aditi Thigle</div>
            <span class="text-muted small">IDR</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1"></script>
<script>
  const ctx = document.getElementById("expenseChart");
  new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Spent", "Remaining"],
      datasets: [{
        data: [5670, 14500 - 5670],
        backgroundColor: ["#ff5c8d", "#9a55ff"],
        borderWidth: 0
      }]
    },
    options: {
      cutout: "70%",
      plugins: { legend: { display: false } }
    }
  });
</script>

</body>
</html>