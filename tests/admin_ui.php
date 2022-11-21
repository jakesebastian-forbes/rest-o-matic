<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Kingsamgyup | Nasugbu</title>
    <link rel="icon" type="image/x-icon" href="/project_files/images/web_icon.png">
    <link rel="stylesheet" href="/project_files/home_page.css">
    <!-- <link rel="stylesheet" href="/bootstrap activity - FORBES JAKE SEBASTIAN S/bootstrap-3/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
   <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

</head>
<body style = "">
 
    <div class ="container-fluid text-center" style="background-color: gray; height: 100vh;">
        <div class = "">
            <!--  -->

            <div class="navbar">
                <!-- nav bar -->
                <i><button class="openbtn" onclick="openNav()">&#9776; Menu</button></i>
                <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
                <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
                <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
                <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>

            </div>

            <div class = "row gx-5 " style="height: 100vh; width:100vw;">
                <div id = "mySidebar" class="sidebar" style ="" >
                    <!-- left menu list --> 
 
                    <!-- <a class="closebtn" onclick="closeNav()">&times;</a> -->
                    <button class="openbtn" onclick="closeNav()">x</button>

                    <a href="#">About</a>
                    <a href="#">Services</a>
                    <a href="#">Clients</a>
                    <a href="#">Contact</a>


                 

                </div>



                <div id ="main" class = "col" style = "background-color: white;">
                    <!-- mid overview, logs, updates -->
                    
                    <div class = "row py-3 ">
                        <div class ="col pt-2">
                            
                            <h5><b>Dashboard</b></h5>

                        </div>
                        <div class = "col">
                            <button type = "button" class ="btn btn-primary">Button</button>

                        </div>
                        
                    </div>


                    <div class = "row ">

                        <div class = "col my-2">
                            <div class = "panel-body panel-default border mx-0 p-4 my-0" id="visit">

                                <h6>Sales this week</h6>

                                <canvas id="myChart2" class="mb-0"  style="width:100%;max-width:min-content;max-height:min-content;"></canvas>

                
                            </div>

                        </div>
                        <div class ="col">
                            <div class = "panel-body panel-default border mx-0 p-4 my-0">

                                <h6>Best selling items</h6>
                                <!-- this could best be a table -->
                                <div class="row">
                                    <div class= "col">
                                        <h6>Item 1</h6>
                                    </div>
                                    <div class="col">
                                        <p>999 sold</p>

                                    </div>
                                    
                                </div>
                                <hr class="my-0 py-0">
                                <div class="row">
                                    <div class= "col">
                                        <h6>Item 2</h6>
                                    </div>
                                    <div class="col">
                                        <p>999 sold</p>

                                    </div>
                                    
                                </div>
                                <hr class="my-0 py-0">
                                <div class="row">
                                    <div class= "col">
                                        <h6>Item 3</h6>
                                    </div>
                                    <div class="col">
                                        <p>999 sold</p>

                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class = "panel-body panel-default border m-3 p-3">
                       <h3>This week's total</h3>
                       <h1>90,759.25</h1>
                    </div>


                    <table class = "table table-hover">
                        <thead>
                            <tr>
                              <th>Time</th>
                              <th>Service</th>
                              <th>Details_ID</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>9:32</td>
                              <td>Dine In</td>
                              <td>934784612</td>
                            </tr>
                            <tr>
                              <td>10:02</td>
                              <td>Delivery</td>
                              <td>124789733</td>
                            </tr>
                            <tr>
                              <td>13:02</td>
                              <td>Take out</td>
                              <td>123125678</td>
                            </tr>
                          </tbody>

 

                    </table>

                </div>

                

                <div id = "right-nav"class = "col" style = "background-color: aliceblue;" >
                    <!-- right KPI statistics -->
                    
                    <div class ="row pt-3">

                        <div class ="col">
                            <select class="form-select">
                                <option>Overall Sales</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                              </select>
                        </div>

                        <div class = "col">

                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                  This week
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Last Week</a></li>
                                  <li><a class="dropdown-item" href="#">Today</a></li>
                                  <li><a class="dropdown-item" href="#">This month</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class = "row">

                        <div class = "col">
                            <h5>Total Income</h5>
                            <h3>90,759.25 Pesos</h3>
                        </div>

                        <div class = "col">

                            <h6>from</h6>
                            <p class  = ""> Date</p>

                        </div>
                    </div>

                    <div class = "row pt-3">

                        <div class = "col">
                            <h5>Total Orders</h5>
                            <p>962</p>
                        </div>
                        <div class = "col">
                            <h5>Average Check</h5>
                            <p>20</p>

                        </div>
                        <div class = "col">
                            <h5>Average asda</h5>
                            <p>20</p>

                        </div>
                    </div>


                    <div class="text-center p-4 mx-3">
                        <div class="panel-body border p-1 m-3"> 
                            <canvas id="barChart" style="width:100%;max-width:700px"></canvas>

                        </div> 

                        <div class="panel-body border p-1 m-3">
                            <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
 
                        </div>
                    </div>

                    
                    <div class="py-0">
                        <hr>
                        <h5>Other statistics</h5>

                        <div class="row">

                            <div class="col">
                                <h6>Cash</h6>
                                <p>659 Orders</p>

                            </div>
                            <div class="col">
                                <p>9999 pesos</p>
                            </div>

                        </div>

                        <hr>
                        <div class="row">

                            <div class="col">
                                <h6>Cash</h6>
                                <p>659 Orders</p>

                            </div>
                            <div class="col">
                                <p>9999 pesos</p>
                            </div>

                        </div>
                    </div>



                    

                </div>

            </div>
        </div>

    </div>

<script src ="/project_files/admin_ui.js"></script>
    
</body>
</html>