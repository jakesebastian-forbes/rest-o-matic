<?php
session_start();
// print_r($_SESSION);

$username1 = $_SESSION['username'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$fullname = $firstname. ' '. $lastname;
$email = $_SESSION['email'];
$phone_number = $_SESSION['mobile_number'];
$address = $_SESSION['address'];




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $title = "Home | Client";
    require('must_haves.php');
  ?>
   <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
</head>

<style>
   .accNavbar{
    margin-top: 10px;
    background-color: black;
   }

   .accNavbar h2{
    float: left; color:white;
    padding-top: 5px; 
    margin-left:10px;
   }
   .accNavbar ul{
        color: white;
        display: flex;
        list-style-type: none;
        padding: 0%;
        padding-top: 1%;
        justify-content: end;
    }
    .accNavbar li{
        text-decoration: none;
        color: white;
        margin: 0% 14px;
        cursor: pointer;
    }

    .footer{
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;
    }
    .socialmedia{
            
            display: flex;
            align-content: center;
           justify-content: space-evenly;
           margin: 5px;
    }
    .socialmedia i{
            color: white;
            font-size: 20px;
    }

    .orderTable th,td{
        text-align: center;
    }

</style>

<body>
    <div class="container-fluid">
      <?php 
      
      include('client_sidebar.php');?>

        <!-- <div class="container"> -->
            <div class="panel">
                <nav>
                    <div class="navbar accNavbar">
                      <h2><img src="images/yeji.jpg" alt="avatar" class="img-fluid rounded-circle" style="width: 50px; height: 50px; border-radius: 50%;"> My Profile</h2>
                        <ul>
                            <li><i class="fa fa-gear" style="font-size: 24px"></i></li>
                             <li><i class="fa fa-shopping-cart" style="font-size: 24px;"></i></li>
                             <li><i class="fa-solid fa-star" style="font-size:24px ;"></i></li>
                        </ul> 
                    </div>
                </nav>
                <div class="panel-body" style="background-color:#EEEDE7 ;">
                   <div class="row" >
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 2%;" >
                          <div class="container">
                            <div class="panel" style="background-color:white;">
                                <div class="panel-body">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                        <a href="acc_settings_ui.php" style="text-decoration: none; color:black;">
                                            <button type="button" class="btn btn-secondary btn-sm" style="float: right; width: 140px; margin-top: 2%; margin-right: 2%;">
                                            <span>

                                            <img src="images/icon/pencil_icon.png" alt="pencil_icon" class ="icon_img">
                                            </span> 
                                            Edit Profile</button>
                                          </a>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="row" style="margin-left:2px ;" >
                                                <div class="col-md-6 col-sm-3">
                                                    <h5 >Username</h5>
                                                </div>
                                                <div class="col-md-6 col-sm-3 text-secondary">
                                                    <h5 id = 'val_username'>xxxxxxx</h5>
                                                </div>
                                             
                                            </div>
                                            <div class="row" style="margin-left:2px ;">
                                                <div class="col-md-6 col-sm-3">
                                                    <h5>Full Name</h5>
                                                </div>
                                                <div class="col-md-6 col-sm-3 text-secondary">
                                                    <h5 id = 'val_fullname'>xxxxxxx</h5>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-left:2px ;">
                                                <div class="col-md-6 col-sm-3">
                                                    <h5>Email</h5>
                                                </div>
                                                <div class="col-md-6 col-sm-3 text-secondary">
                                                    <h5 id = 'val_email'>xxxxxxx</h5>
                                                </div>
                                                
                                            </div>
                                            <div class="row" style="margin-left:2px ;">
                                                <div class="col-md-6 col-sm-3">
                                                    <h5>Phone Number</h5>
                                                </div>
                                                <div class="col-md-6 col-sm-3 text-secondary">
                                                    <h5 id = 'val_phone'>xxxxxxx</h5>
                                                </div>
                                              
                                            </div>
                                            <div class="row" style="margin-left:2px ;">
                                                <div class="col-md-6 col-sm-3">
                                                    <h5>Address</h5>
                                                </div>
                                                <div class="col-md-6 col-sm-3 text-secondary">
                                                    <h5 id = 'val_address'>xxxxxxx</h5>
                                                </div>
                                               
                                            </div>
                                        </div>
                                      </div>





                                </div>
                            </div>
                          </div>
                           
                          
                        </div>
                      
                  <!-- </div> -->
                        
                        <div class="col-lg-6 col-md-6 col-md-3" style="padding: 6%; justify-content: center;">
                            <div class="panel">
                                <div class="panel-body">
                            <div class="row row1">
                                <div class="col-lg-6 col-md-6 col-sm-3">
                                   <button class="btn btn-light" style="background-color: #FFA500; border: none; height: 120px; max-height: 100%; width: 240px; max-width: 100%;">
                                    <a href="client_ui_order.php" style="text-decoration: none; color: black;">
                                        <h1 style="font-size: 200%; text-align: center; margin-top: 5px;" id = "orders_cnt">3</h1>
                                        ORDERS</a>
                                    </button>   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-3">
                                <button class="btn btn-light" style="background-color: #FFA500; border: none; height: 120px; max-height: 100%; width: 240px; max-width: 100%;">
                                    <a href="/reservation.html" style="text-decoration: none; color: black;">
                                        <h1 style="font-size: 200%; text-align: center; margin-top: 5px;" id = "reservation_cnt">5</h1>
                                        RESERVATION</a>
                                </button>
                                </div>
                            </div>
                            </div>
                        </div>
                   </div>
                </div>
                
                <div class="row row2">
                  <div class="col">
                    <div class="panel" style="margin: 50PX;background-color:white ;">
                        <div class="panel-body">
                            <table class="table orderTable">
                                <thead>
                                  <tr>
                                    <th>ORDER NUMBER</th>
                                    <th>PLACED ON</th>
                                    <th>ITEM</th>
                                    <th>TOTAL</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">123456</th>
                                    <td>October 1, 2022</td>
                                    <td>Item 6</td>
                                    <td>250</td>
                                  </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <th scope="row">456789</th>
                                    <td>October 2, 2022</td>
                                    <td>Item 7</td>
                                    <td>475</td>
                                  </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <th scope="row">678901</th>
                                    <td>October 6, 2022</td>
                                    <td>Item 6</td>
                                    <td>236</td>
                                  </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <th scope="row">245678</th>
                                    <td>October 17, 2022</td>
                                    <td>Item 3</td>
                                    <td>490</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                     
                    
                  </div>
              </div>
            
                <footer>
                  <div class="footer container-fluid" style="background-color:black ;margin-top: 20px; color: white;">
                    <div class="row" style="padding-top:1%;">
                        <div class="col-lg-6 col-md-6 col-sm-6" >
                            <div class="row">
                                <h2>ABOUT US</h2>
                            </div>
                            <div class="row">
                                <p>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG<br>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG<br>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG<br>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG</p>
                            </div>
                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="display: flex; justify-content: space-evenly">
                        <div class="col-lg-3">
                            <div class="row">
                                <center>
                                    <h4>FOLLOW US</h4>
                                </center>
                                
                            </div>
                            <div class="row"  >
                                <div class="col">
                                    <center>
                                        <div class="socialmedia" >
                                            <a href="https://www.facebook.com/kcorndognasugbu/"><i class="fa-brands fa-facebook"></i></a>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        </div>
                                    </center>
                                   
                                </div> 
                            </div>
                        </div>
                    
                        
                        <div class="col-lg-3">
                            <center>
                                <h5>CALL US</h5>
                                <p>(+63) 916 987 4623</p>
                            </center>
                        </div>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <small>@2021 cornpups kenan's korean Corndog, Nasugbu Batangas, All Rights Reserved</small>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="display: flex; justify-content:space-evenly;">
                        <div class="col-4">
                            <small style="float:right;">PRIVACY POLICY</small>
                        </div>
                        <div class="col-4">
                            <small style="float: left">TERMS OF USE</small>
                        </div>    
                    </div>
                </div>
                </div>
            </footer>
    </div>
  </div>

  <?php

include ('db_connection.php');
$client_id = $_SESSION['client_id'];

if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
   }else{
    // echo " uyyy". $category;
  $query = "SELECT `count` FROM `order_count` WHERE client_id = $client_id ;";

  $result = mysqli_query($conn,$query);
  

  while($rows = mysqli_fetch_assoc($result))
      {
        $count = $rows['count'];

        

      }
    //   echo 'count ' . $count;

    }

echo "
<script>

document.getElementById('val_username').innerHTML = '$username1' ; 
document.getElementById('val_fullname').innerHTML = '$fullname' ; 
document.getElementById('val_email').innerHTML = '$email' ; 
document.getElementById('val_phone').innerHTML = '$phone_number' ; 
document.getElementById('val_address').innerHTML = '$address' ; 

document.getElementById('orders_cnt').innerHTML = '$count' ; 

var active = document.getElementById('nav_account');
active.setAttribute('class','nav-link my-nav-link active',);

</script>";


?>





</body>
</html>