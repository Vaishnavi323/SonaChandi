<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard</title>

  <!-- Bootstrap & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    :root {
      --purple-100: #f6efff;
      --purple-200: #ecdfff;
      --purple-300: #d5bfff;
      --purple-500: #aa7aff;
      --purple-600: #9a55ff;
      --gray-200: #f3f4f6;
      --gray-300: #e9ecf3;
      --gray-400: #d8dbe6;
      --text-main: #272b41;
      --text-muted: #8e95a9;
      --radius: 14px;
    }

    h6,
    .fw-semibold {
      font-weight: 600;
      color: black;
    }

    .glass-card {
      border: 1px solid var(--gray-300);
      backdrop-filter: blur(8px);
      background: rgba(255, 255, 255, 0.72);
      border-radius: var(--radius);
      box-shadow: 0 2px 8px rgba(153, 100, 255, 0.08);
      transition: 0.3s;
    }

    .glass-card:hover {
      transform: scale(1.01);
      box-shadow: 0 4px 12px rgba(153, 100, 255, 0.15);
    }

    .metric-value {
      font-size: 32px;
      font-weight: 700;
      letter-spacing: 0.5px;
      color: black;
    }

    .metric-icon {
      font-size: 28px;
      color: white;
      background: var(--purple-500);
      padding: 15px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
    }

    .progress {
      height: 6px;
      border-radius: 4px;
    }

    .mini-card {
      border: 1px solid var(--gray-300);
      border-radius: var(--radius);
      padding: 18px 16px;
      text-align: center;
    }

    .avatar-sm {
      width: 46px;
      height: 46px;
      border-radius: 50%;
      background: var(--purple-300);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 20px;
      margin: 0 auto 6px;
    }

    .tab-pill .nav-link {
      --bs-nav-link-color: var(--text-muted);
      --bs-nav-link-hover-color: var(--text-main);
      border: 0;
      border-radius: var(--radius);
      padding: 4px 18px;
    }

    .tab-pill .nav-link.active {
      background: var(--gray-200);
      color: var(--text-main) !important;
      font-weight: 600;
    }

    .small {
      color: black;
    }
  </style>
</head>
<body>

<div class="container-fluid p-0">
  <div class="row g-0">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="col-lg-9 col-xl-10 col-12 offset-xl-2 offset-lg-3">
      <?php include 'navbar.php'; ?>

      <div class="container-xl mt-4 px-lg-5">
        <!-- KPI Metrics -->
        <div class="row my-3 g-4">
          <div class="col-md-4">
            <div class="glass-card p-3 d-flex align-items-center">
              <div class="metric-icon"><i class="fa-solid fa-file-lines"></i></div>
              <div>
                <h4 class="metric-value">75</h4>
                <p>Total Orders</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="glass-card p-3 d-flex align-items-center">
              <div class="metric-icon"><i class="fa-solid fa-user-group"></i></div>
              <div>
                <h4 class="metric-value">120</h4>
                <p>Total Clients</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="glass-card p-3 d-flex align-items-center">
              <div class="metric-icon"><i class="fa-solid fa-book"></i></div>
              <div>
                <h4 class="metric-value">60</h4>
                <p>Total Delivered</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Top Products & Donut Chart -->
        <div class="row g-4">
          <div class="col-lg-8">
            <div class="glass-card p-4">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="mb-0">Top Products</h6>
              </div>
              <div class="table-responsive">
                <table class="table align-middle mb-0">
                  <thead class="small">
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Popularity</th>
                      <th class="text-end">Sales</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>Twisted Ring</td>
                      <td><div class="progress"><div class="progress-bar bg-primary" style="width:90%"></div></div></td>
                      <td class="text-end text-primary fw-semibold">45%</td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>Golden Studs</td>
                      <td><div class="progress"><div class="progress-bar bg-success" style="width:75%"></div></div></td>
                      <td class="text-end text-success fw-semibold">29%</td>
                    </tr>
                    <tr>
                      <td>03</td>
                      <td>Butterfly Pendant</td>
                      <td><div class="progress"><div class="progress-bar" style="background:#9a55ff;width:45%"></div></div></td>
                      <td class="text-end fw-semibold" style="color:#9a55ff">18%</td>
                    </tr>
                    <tr>
                      <td>04</td>
                      <td>Traditional Necklace</td>
                      <td><div class="progress"><div class="progress-bar bg-warning" style="width:55%"></div></div></td>
                      <td class="text-end text-warning fw-semibold">25%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Donut Chart -->
          <div class="col-lg-4">
            <div class="glass-card p-4 h-100">
              <ul class="nav nav-pills justify-content-center gap-2 tab-pill mb-4" id="timeTabs">
                <li class="nav-item"><button class="nav-link small" data-period="daily">Daily</button></li>
                <li class="nav-item"><button class="nav-link small active" data-period="weekly">Weekly</button></li>
                <li class="nav-item"><button class="nav-link small" data-period="monthly">Monthly</button></li>
              </ul>
              <div class="text-center mb-2">
                <h5 class="mb-0 fw-semibold">$14,500.89</h5>
                <div class="small text-muted">My Total</div>
              </div>
              <canvas id="expenseChart" height="200"></canvas>
              <div class="text-center mt-3 small">
                $5,670.00<br />
                <span class="text-muted">My Total Expenses</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Top Clients & Requests -->
        <div class="row g-4 mt-1">
          <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h6 class="mb-0">Top Clients</h6>
              <a href="#" class="small text-decoration-none">See All</a>
            </div>
            <div class="row g-3">
              <?php for ($i = 0; $i < 3; $i++): ?>
              <div class="col-6 col-sm-4 col-lg-3">
                <div class="mini-card">
                  <div class="avatar-sm"><i class="fa-solid fa-user"></i></div>
                  <div class="fw-semibold">Aditi T</div>
                  <small class="text-muted">(ID: <?= $i+2 ?>)</small><br />
                  <small class="text-muted">Ordered: 3</small>
                </div>
              </div>
              <?php endfor; ?>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h6 class="mb-0">Client Requests</h6>
              <a href="#" class="small text-decoration-none">See All</a>
            </div>
            <div class="d-flex flex-column gap-3">
              <?php for ($i = 0; $i < 3; $i++): ?>
              <div class="mini-card d-flex align-items-center gap-2">
                <div class="avatar-sm" style="width:36px;height:36px;font-size:14px;"><i class="fa-solid fa-user"></i></div>
                <div class="flex-grow-1">Aditi Thigle</div>
                <span class="small text-muted">IDR</span>
              </div>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1"></script>
<script>
  const ctx = document.getElementById("expenseChart");
  const doughnut = new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Spent", "Remaining"],
      datasets: [{
        data: [5670, 14500 - 5670],
        backgroundColor: ["#ff5c8d", "#9a55ff"],
        borderWidth: 0,
      }],
    },
    options: {
      cutout: "70%",
      plugins: { legend: { display: false } },
    }
  });

  document.querySelectorAll('[data-period]').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('#timeTabs .nav-link').forEach(n => n.classList.remove('active'));
      btn.classList.add('active');
    });
  });
</script>

</body>
</html>
