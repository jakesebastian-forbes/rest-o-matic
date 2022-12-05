<?php
// session_start();
// print_r($_SESSION);
// include 'db_connection_try.php';
// include 'admin_home_json.php';
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "description" content="">
    <title>HOME | ADMIN</title>

    <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png"/> 
    <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/general.css"/>
    <link rel="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        /* Style the buttons */
/* .btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
} */

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #F58216;
  color: white;
}
    </style>
    
</head>

<body>
    
<div class="container-fluid">

<?php
$page_title = "DASHBOARD";

require "admin_sidebar.php";
?>


<?php 
// $title_sidebar = "Dashboard";
// require 'admin_sidebar.php';
?>  
    <div class="row my-3">
        <!-- <div class="col-9">
            <h4>WELCOME TO DASHBOARD</h4>
        </div> -->
        <div class="text-left">
            <div class="btn-wrapper">
            <a href="#" class="btn btn-otline-dark btn-sm align-items-center pull-right"><i class="material-icons">share</i><span>Share</span></a>
            <a href="#" class="btn btn-otline-dark btn-sm pull-right" onclick="window.print()"><i class="material-icons">print</i><span>Print</span></a>
            </div>
        </div>
    </div>
              
    <div class="row my-2 mx1">
        <div class="col-lg-3 col-6 py-1">
            <div class="card" style="width:100%;max-width:700px; background-color: #F8DC88;">
                <div class="card-body rounded">
                <p class="statistics-title">TODAY SALES</p>
                <h3 class="rate-percentage text-center">32.53%</h3>
                </div>
            </div>
            </div>
        <div class="col-lg-3 col-6 py-1">
            <div class="card" style="width:100%;max-width:700px;background-color: #FCC945;">
                <div class="card-body rounded" >
                <p class="statistics-title">ORDER</p>
                <h3 class="rate-percentage text-center">58.00%</h3>
                <!-- <canvas id="customer_report" ></canvas> -->
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 py-1">
            <div class="card" style="width:100%;max-width:700px;background-color: #F39A27;">
                <div class="card-body rounded">
                <p class="statistics-title">RESERVATION</p>
                <h3 class="rate-percentage text-center">32.53%</h3>    
                <!-- <canvas id="employee_report"></canvas> -->
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 py-1">
            <div class="card " style="width:100%;max-width:700px;background-color: #FF9D4F;">
                <div class="card-body rounded">
                <p class="statistics-title">TOTAL ORDER FOR THE DAY</p>
                <h3 class="rate-percentage text-center">32.53%</h3>
                    <!-- <canvas id="chubanes_report" ></canvas> -->
                </div>
            </div>
        </div>
    </div>

   
                  <div class="row py-2">
                    <div class="col-lg-9 py-1 ">
                        <div class="card" style="width:100%;max-width:1500px;min-height: 500px;background-color: #FFB347;">
                            <h4>MARKETING SALES</h4>
                           
                            <!-- <div class="col-1 align-items-end py-1 mx-5"> -->
                            <!-- <div class="dropdown" id="dataSales">
                            
                                      <button class="btn btn-secondary dropdown-toggle toggle-dark btn-SM mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button> 
                                      -->
                          <!-- <select name="" id="dataSales">
                           
                            <option value="" >Data 1</option>
                            <option value="">Data 2</option>
                            <option value="">Data 3</option>
                            
                          </select> -->
                          <div id="myDIV">
                            <button class="btn active" onclick="changeData(0)">This Day</button>
                            <button class="btn" onclick="changeData(1)">This Week</button>
                            <button class="btn" onclick="changeData(2)">This Month</button>
                        </div>
                         
                                      <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2" >
                                        
                                        <h6 class="dropdown-header">Corndog</h6>
                                       
                                        <a class="dropdown-item" href="#" value="echo $rows['data1'];">Data 1</a>
                                        <a class="dropdown-item" href="#" value="echo $rows['data2'];">Data 2</a>
                                        <a class="dropdown-item" href="#" value="echo $rows['ID'];">Data 3</a>
                                        
                                    </div> -->
                              
                             <!-- </div> -->
                            
                             <!-- </div> -->
                             
                             
                            <div class="card-body" >
                                <canvas id="multipleLinesChart1" height="71" width="200"></canvas>
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="col-md-3 py-1">
                        <div class="card" >
                            <div class="card-body" style="width:100%;max-width:700px;min-height:500px;background-color: #F49C1B; object: fit">
                               <p>DOUGHNUT</p>
                            <canvas id="donut3" height="103"  width="90" >
                                    
                                </canvas>
                                <p class="my-3 text-center">bdown of total sales of item</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            
            </div>

    <script src = "../bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>

     <script src="jquery.min.js.js"></script>
     <script src='Chart.min.js'></script>
     <script src = "lineChart_ajax.js"> </script>
    <script src = "doughnut_ajax.js"> </script>
    



</body>
</html>