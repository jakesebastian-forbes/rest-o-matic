<?php
session_start();
// print_r($_SESSION);
$client_id= $_SESSION['client_id'];
$username1 = $_SESSION['username'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$fullname = $firstname. ' '. $lastname;
$email = $_SESSION['email'];
$phone_number = $_SESSION['mobile_number'];
$address = $_SESSION['address'];
$birthdate = $_SESSION['birthdate'];




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

    td{
    word-wrap: break-word;
    }



</style>

<body>
    <div class="container-fluid p-0">
      <?php 
      $title_sidebar = "MY PROFILE";
      include('client_sidebar.php');?>

        <!-- <div class="container"> -->
            <div >
                
                <div >
                   <div class="row m-0" >
                        
                    <div class="col m-auto">
                      <div class= ""
                      style = "
                      display:block;
                      margin-left:auto;margin-right:auto;
                      ">
                        <img src="images/yeji.jpg" alt=""
                        style = "border-radius: 15px;
                        width:190px; height:190px;
                        object-fit:cover;
                      
                      ">
                        </div>

                    </div>

                   <div class="col-6 m-3">
                        <div class="panel border p-4 py-2"
                              style = "background-color:whitesmoke;
                                        border-radius:8px;">
                            <div class="panel-heading">
                              <form action="">
                                <input type="text" value = "<?php echo $client_id?>" hidden>
                                  <a href="acc_settings_ui.php" style = "float:right; margin-right:15px;">
                                        <span><img src="images/icon/pencil_icon.png" alt="edit" 
                                        class ="icon_img" style= "display:inline"></span>
                                       <h6 style= "display:inline">Edit</h6>
                                  </a>
                              </form>
                            </div>
                            <div class="panel-body">

                            <table class="table table-responsive table-borderless" 
                            style =" table-layout: fixed;">
                              
                                 <tr>
                                    <td class = "text-start">Username</td>
                                    <td class = "text-start"><?php echo $username1?></td>
                                 </tr>
                                 <tr>
                                    <td class = "text-start">Fullname</td>
                                    <td class = "text-start"><?php echo $fullname?></td>
                                 </tr>
                                 <tr>
                                    <td class = "text-start">Birthdate</td>
                                    <td class = "text-start"><?php echo $birthdate?></td>
                                 </tr>
                                 <tr>
                                    <td class = "text-start">Mobile Number</td>
                                    <td class = "text-start"><?php echo $phone_number?></td>
                                 </tr>
                                 <tr>
                                    <td class = "text-start">E-mail</td>
                                    <td class = "text-start"><?php echo $email?></td>
                                 </tr>
                                 <tr>
                                    <td class = "text-start">Address</td>
                                    <td class = "text-start"><?php echo $address?></td>
                                 </tr>


                            </table>

                            </div>

                        </div>

                   </div>
             
                   <div class="col m-auto">

                   <div class = "m-auto">
                        <div class = "text-center my-lg-banner">
                            <h3 class = "">5</h3>
                            <h6>Orders</h6>
                        </div>
                        <br>
                        <div class = "text-center my-lg-banner">
                            <h3>1</h3>
                            <h6>Reservations</h6>

                        </div>

                   </div>


                   </div>
                        
                </div>
                
                <div class="row row2 m-0">
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

</script>";


?>


<script>

var active = document.getElementById('nav_account');
active.setAttribute('class','nav-link my-nav-link my-active',);


</script>




</body>
</html>