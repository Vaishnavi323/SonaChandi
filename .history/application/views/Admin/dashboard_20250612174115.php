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
#sidebar
{


width: 15%;

    background-color: #a678e2;
border-bottom-right-radius:5px ;
border-top-right-radius: 5px;

height:100vh;

position: fixed;
top: 0;
left:0;
z-index: 10;


}
.main{
width: 85%;

}

        .avatar {
    width: 100px;
    height: 100px;
    /* background-color: #ccc; */
    /* border-radius: 50%; */
    overflow: hidden; 
    display: inline-block;
    margin-bottom: 10px;
}

.avatar img {
    width: 90%;
    height: 90%;
    object-fit: cover;
}





     .btn {
       color: white;
      font-weight: 500;

      background: linear-gradient(180deg, rgba(106, 15, 224, 0.47) 0%, rgba(95, 72, 126, 0.42) 100%);
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;


    }




@media (max-width: 575.98px) {
 

        #sidebar
{

position: fixed;
top: 0;
left:0;
z-index: 10;
width: 20vh;
display: none;
min-height:100vh;
}
.main{
width:100vw;
    
}


}


@media (min-width: 576px) and (max-width: 767.98px) {
 

    #sidebar
{
height:100vh;

position: fixed;
top: 0;
left:0;
z-index: 10;
width: 20vw;
display:none ;
}
.main{
width:100%;
    
}
}


@media (min-width: 768px) and (max-width: 991.98px) {
        #sidebar
    {

height:100vh;
width: 20%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 80%;
margin-left:20%;
}

  
}

@media (min-width: 992px) and (max-width: 1199.98px) {


        #sidebar
    {

height:100vh;
width: 15%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 85%;
margin-left:15%;

}

}

@media (min-width: 1200px) and (max-width: 1399.98px) {


        #sidebar
    {

height:100vh;
width: 15%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 85%;
margin-left:14%;

}



}


@media (min-width: 1400px) {


    #sidebar
    {

height:100vh;
width: 15%;

    }
 
.main
{

height:100vh;
background: rgb(249, 249, 249);
width: 85%;
margin-left:15%;


}



}

</style>


</head>
<body>
    
<div id="sidebar">
  <div class="d-flex d-md-none justify-content-end p-2 b">
    <button class="btn p-2" id="sidebarToggle" style="background: transparent; border: none;">
      <i class="fa-solid fa-xmark  text-dark" onclick="hideSidebar()"></i>
    
    </button>
  </div>

        <?php include 'sidebar.php'; ?>
      
    
    </div>
<div class="main ">

<div class="container-fluid shadow-sm d-flex justify-content-between justify-content-sm-end align-items-center p-2">
  <div class="d-md-none p-2 bg-light">
    <button class="btn p-2" id="sidebarToggle" style="background: transparent; border: none;">
      <i class="fas fa-bars fs-4 text-dark" onclick="showSidebar()"></i>
    </button>
  </div>

        <?php include 'navbar.php'; ?>
</div>
<div class="container px-4">

                <div class="row mt-3">
                    <!-- Stats Boxes -->
                    <div class="col-md-9">
                        <div class="row" >
                            <div class="col-md-4" >
                                <div class="card p-2 text-center top-box">
                                    <div class="row">
                                        <div class="col-md-4"> 
                                            <img class="img-fluid" src="<?php echo base_url("assets/Admin/orders.png"); ?>" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Total Orders</h6>
                                            <h2>75</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4" >
                                <div class="card p-2 text-center top-box">
                                    <div class="row">
                                        <div class="col-md-4">
                                             <img class="img-fluid" src="<?php echo base_url("assets/Admin/clients.png"); ?>" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Total Clients</h6>
                                            <h2>42</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4" >
                                <div class="card p-2 text-center top-box">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                             <img class="img-fluid " src="<?php echo base_url("assets/Admin/deliverd.png"); ?>" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Total Delivered</h6>
                                            <h2>55</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="row mt-4" >
                            <div class="col-md-12">
                                <h5>Top Products</h5>
                                <div class="card p-2">
                                    <table class="table mt-3">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Popularity</th>
                                                <th>Sales</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Twisted Ring</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" style="width: 55%"></div>
                                                    </div>
                                                </td>
                                                <td>55%</td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Golden Studs</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" style="width: 29%"></div>
                                                    </div>
                                                </td>
                                                <td>29%</td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Butterfly Pendant</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 18%; background-color: rebeccapurple;"></div>
                                                    </div>
                                                </td>
                                                <td>18%</td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Traditional Necklace</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 25%"></div>
                                                    </div>
                                                </td>
                                                <td>25%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Top Clients -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>Top Clients</h5>
                                <div class=" p-2">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card text-center">
                                            <div class="avatar mx-auto my-1"> <img src="<?php echo base_url("assets/Admin/Avatar.png"); ?>" alt=""></div>

                                            <p class="mb-0">Aditi T<br>(ID: 2)<br>Ordered: 3</p>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="card text-center">
                                            <div class="avatar mx-auto my-1"> <img src="<?php echo base_url("assets/Admin/Avatar.png"); ?>" alt=""></div>

                                            <p class="mb-0">Aditi T<br>(ID: 2)<br>Ordered: 3</p>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="card text-center">
                                            <div class="avatar mx-auto my-1"> <img src="<?php echo base_url("assets/Admin/Avatar.png"); ?>" alt=""></div>

                                            <p class="mb-0">Aditi T<br>(ID: 2)<br>Ordered: 3</p>
                                        </div>
                                    </div>
                                </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="card p-2 text-center mb-3">
                            
  <div class="d-flex">
    <div>
      <button class="btn  me-1">Daily</button>
      <button class="btn  me-1">Weekly</button>
      <button class="btn ">Monthly</button>
    </div>
    <!-- <div class="ms-auto me-1">
      <button class="btn "><i class="fa-solid fa-plus fs-5 rounded "></i></button>
    </div> -->
  </div>

                            <h6 class="mt-4">Weekly</h6>
                            <canvas id="salesChart" height="200"></canvas>
                            <h6 class="mt-4">$14,500.89<br><small class="text-muted">My Total</small></h6>
                            <h6>$5,670.00<br><small class="text-muted">My Total Expenses</small></h6>
                        </div>

                        <h5>Client Requests</h5>
                        <div class="card p-3 ">
                            <div class="card mb-2 p-1">
                                <div class="row">
                                    <div class="col-md-3"><img class="img-fluid " src="<?php echo base_url("assets/Admin/person.png"); ?>" alt=""></div>
                                    <div class="col-md-6 fs-6">Aditi Thigle</div>
                                    <div class="col-md-3">IDR</div>
                                </div>
                            </div>
                             <div class="card mb-2 p-2">
                                <div class="row">
                                    <div class="col-md-3"><img class="img-fluid " src="<?php echo base_url("assets/Admin/person.png"); ?>" alt=""></div>
                                    <div class="col-md-6 fs-6">Aditi Thigle</div>
                                    <div class="col-md-3">IDR</div>
                                </div>
                            </div>
                            <div class="card mb-2 p-2">
                                <div class="row">
                                    <div class="col-md-3"><img class="img-fluid " src="<?php echo base_url("assets/Admin/person.png"); ?>" alt=""></div>
                                    <div class="col-md-6 fs-6">Aditi Thigle</div>
                                    <div class="col-md-3">IDR</div>
                                </div>
                            </div>
                        </div>
                            
                             
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- col-10 -->


</div>

</div>







  <script src="<?php echo base_url("assets/js/sidebar.js"); ?>"></script>

  

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['abc', 'xyz', 'pqr'],
                datasets: [{
                    label: 'Expenses',
                    data: [20, 60, 20],
                    backgroundColor: ['#6f42c1', '#fbc2eb', '#ddd']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                },
                cutout: '80%',
            }
        });
    </script>







  

</body>
</html>