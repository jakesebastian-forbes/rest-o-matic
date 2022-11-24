<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "description" content="">
    <title>HOME | ADMIN</title>

    <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png"/> 
    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/general.css"/>
    <link rel="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://cdnjs.cloudfare.com/ajax/libs/Chart.js/2.1.3/Chart.js"></script>
  <script src = "https://cdnjs.cloudfare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    
</head>

<body>
    
<div class="container-fluid m-0 p-0">
<?php 
// $title_sidebar = "Dashboard";
// require 'admin_sidebar.php';
?>  
<div class="row my-3">
                    <div class="col-9">
                        <h4>WELCOME TO DASHBOARD</h4>
                    </div>
                    <div class="col-3">
                        <div class="btn-wrapper">
                        <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                        </div>
                    </div>
                </div>
              
                <div class="row my-2">
                    <div class="col-md-3 py-1">
                    
                        <div class="card">
                            <div class="card-body rounded"  style="width:100%;max-width:700px;background-color: blue;">
                            <p class="statistics-title">TODAY SALES</p>
                            <h3 class="rate-percentage text-center">32.53%</h3>
                            <!-- <canvas id="TodaySales_report""></canvas> -->
            
                            </div>
                            
                        </div>
                     </div>
                    
                    <div class="col-md-3 py-1">
                        <div class="card">
                            <div class="card-body rounded" style="width:100%;max-width:700px;background-color: green;">
                            <p class="statistics-title">ORDER</p>
                            <h3 class="rate-percentage text-center">58.00%</h3>
                            <!-- <canvas id="customer_report" ></canvas> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-1">
                        <div class="card">
                            <div class="card-body rounded"style="width:100%;max-width:700px;background-color: red;">
                            <p class="statistics-title">RESERVATION</p>
                            <h3 class="rate-percentage text-center">32.53%</h3>    
                            <!-- <canvas id="employee_report"></canvas> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-1">
                        <div class="card " style="width:100%;max-width:700px;background-color: pink;">
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
                        <div class="card" style="width:100%;max-width:1000px;min-height:350px;background-color: orange;">
                            <h3>MARKETING SALES</h3>
                            <div class="col-1 align-items-end py-1 mx-5">
                            <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle toggle-dark btn-SM mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <h6 class="dropdown-header">Settings</h6>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                      </div>
                             </div>
                             </div>
                            <div class="card-body" >
                                <canvas id="multipleLines-chart1" height="100" width="200"></canvas>
                                
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="col-md-3 py-1">
                        <div class="card" >
                            <div class="card-body" style="width:100%;max-width:700px;min-height:350px;background-color: yellow;">
                               <p>DOUGHNUT</p>
                            <canvas id="donut3" height="300"  width="350" >
                                    
                                </canvas>
                                <p class="my-3 text-center">bdown of total sales of item</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>

    <script src = "bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->
    <!-- <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.js"></script>
    <script scr="https://cdn.jsdelivr.net/npm/chart.js"></script>
     -->
    <!-- <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"> </script> -->
    <!-- <script src = "https://cdnjs.cloudflare.com/ajax/libs/chart.piecelabel.js/0.15.0/Chart.PieceLabel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-doughnutlabel/2.0.3/chartjs-plugin-doughnutlabel.js"></script>
     -->
    <script src = "admin_home.js"> </script>
    <script src = "doughnut_chart.js"> </script>
    



</body>
</html>