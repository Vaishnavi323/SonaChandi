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


        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f5f5f7;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .form-container {
            background: #fff;
            padding: 20px 20px;
            width: 100%;
            max-width: 500px;
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        }

        h2 {
            text-align: center;
            margin-bottom: 8px;
            font-size: 24px;
            color: #333;
        }

        label {
            margin-top: 10px;
            display: block;
            font-weight: 500;
            color: #555;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 12px;
        }

        .time-row {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .time-col {
            flex: 1;
        }

        textarea {
            resize: vertical;
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
      margin:0px 180px 0px 180px;
    }

    .gradient-button:hover {
      opacity: 0.9;
      transform: scale(1.03);
    }

        .success {
            text-align: center;
            color: green;
            margin-top: 10px;
        }

        @media (min-width: 600px) {
            .time-row {
                flex-direction: row;
            }
        }
  </style>
  </head>
  <body>


  <div class="container-fluid p-0" style=" background:#FAFAF9">
<div class="row g-0">
  <!-- sidebar   -->
      <?php include 'sidebar.php';?>

      <div class="col-lg-9 col-xl-10 col-12  shadow offset-xl-2 offset-lg-3  ">
<!-- navbar -->
<?php include 'navbar.php';?>


<div class="wrapper">
    <div class="form-container">
        <h2>Customer Feedback Entry</h2>



        <form method="post" action="">
            
            <input type="text" name="name" id="name" placeholder="Enter Customer Name" required>

            
            <input type="email" name="email" id="email" placeholder="Enter your Email" required>

            
            <input type="tel" name="phone" id="phone" placeholder="Enter Mobile number" required>

            
            <select name="purpose" id="purpose" placeholder="Select the Purpose" required>
                <option value="">Select Purpose</option>
                <option value="Enquiry">Enquiry</option>
                <option value="Purchase">Purchase</option>
            </select>

            <label for="date">Date</label>
            <input type="date" name="date" id="date" required>

            <div class="time-row">
                <div class="time-col">
                    <label for="in_time">In Time</label>
                    <input type="time" name="in_time" id="in_time" required>
                </div>
                <div class="time-col">
                    <label for="out_time">Out Time</label>
                    <input type="time" name="out_time" id="out_time" required>
                </div>
            </div>

            <textarea name="feedback" id="feedback" rows="4" placeholder="Enter feedback..." required></textarea>

             <button class="gradient-button">Submit </button>
        </form>
    </div>
</div>
</div>
</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>


</body>
</html>