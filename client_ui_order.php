<?php
session_start();
// print_r($_SESSION);
include 'db_connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>  

    <?php
        $title = "Orders | Client | Restomatic";
        require('must_haves.php');
    ?>
</head>

    


    <style>
        .dropdown {
            display: inline-block; 
           
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: black;
            min-width: 100px;
            padding: 12px 16px;
            color: white;
            
        
        }

        .dropdown-content ul{
            display: flex;
            
            list-style: none;
        
        }

        .dropdown:hover .dropdown-content {
        display: block;
        }

        .orderNavbar{
        background-color: #FFA500;
        margin-top: 10px;
        justify-content: space-between;
        
        }

        .nav-item a{
            margin: 5px;
            color: black;
        }

        .my-nav-item :hover{
            
            background-color: white;
            color: black;
            border-radius: 10PX;
        }

        .cardbody{
            color: black;
        }

        .cardFooter{
            justify-content: left;
            color: black;
        }

        .panelFooter{
            background-color: #EEEDE7;
           
            display: flex;
            align-content: center;
            justify-content: center;
            width: 100%;
        }

        .socialmedia{
            display: flex;
            font-size: 20px;
            align-content: center;
            justify-content: space-between;
           
        }

        .socialmedia a{
            color: black;
        }

        .footerline {
            width: 100%;
            height: 1px;
            background-color: black;
        }

        .checked{
            color: orange;
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
        .footerline {
            width: 100%;
            height: 1px;
            background-color:white;
        }

    </style>



<body>
    <div class="container-fluid p-0">
            
<?php
    $title_sidebar = "MY ORDERS";
    require('client_sidebar.php');
?>

      <div class="container-fluid">
        <div class="panel" style="background-color:black ; margin-top:10px; color:white">
            <!-- <div class="panel-heading" style="background-color: #EEEDE7">

            </div> -->
            <h2 style="padding-top:5px ; margin-left:10px;"><i class="fa-solid fa-list"></i> ORDERS</h2>
            
            <ul class="nav orderNavbar">
                <li class="nav-item my-nav-item">
                    <a class="nav-link active" href="#">ALL</a>
                </li>
                <li class="nav-item my-nav-item">
                    <a class="nav-link active" href="#">TO PAY</a>
                </li>
                <li class="nav-item my-nav-item">
                    <a class="nav-link active" href="#">TO RECIEVE</a>
                </li>
                <li class="nav-item my-nav-item">
                    <a class="nav-link active" href="#">COMPLETED</a>
                </li>
                <li class="nav-item my-nav-item">
                    <a class="nav-link active" href="#">CANCELLED</a>
                </li>
                <li class="nav-item my-nav-item">
                    <a class="nav-link active" href="#">RETURN/REFUND</a>
                </li>
            </ul>

            <div class="panel-body" style="background-color: #EEEDE7;">
                <div class="row">
                    <div class="col">
                        <center>
                        <?php

$client_id = $_SESSION['client_id'] ;
  if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
   }else{
    // echo " uyyy". $category;
  $query = "SELECT * FROM `client_order` WHERE `client_id` = $client_id ;";

  $result_orderID = mysqli_query($conn,$query);

  while($rows_orderID = mysqli_fetch_assoc($result_orderID))
      {
       $order_id =  $rows_orderID['order_id']
  ?>
                            <div class="card" style="width:inherit; margin:2%;">
                                <div class="card-header" id = "order">
                         
                                    <h6 style="color: black ; float:left;">Order ID : </h6>
                                    <h6 id = "order_id" style="color: black ;  float:left;"><?php echo $rows_orderID['order_id']?> </h6>
                                    <h5 style="color: black ; float: right;"><?php echo $rows_orderID['status']?></h5>
                        
                                </div>
                                <div class="card-body cardbody">
                                    
                                    <?php

                                        
                                        if($conn->connect_error){
                                            die('Connection failed : ' . $conn->connect_error);
                                        }else{
                                            // echo " uyyy". $category;
                                        $query = "SELECT * FROM `orders_content` WHERE `client_id` = $client_id AND `order_id` = $order_id;";

                                        $result = mysqli_query($conn,$query);

                                        while($rows = mysqli_fetch_assoc($result))
                                            {
                                            
                                        ?>
                                        <div class="row">
                                        <div class="col-sm-3">
                                        <?php echo '<img class="card-img-top img img-responsive" src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" 
        style ="width : 50px; height:50px; object-fit: cover;"/>';?>
                                            <div class="row">
                                                <h6 id = "order_menu_item"><?php echo $rows['item_name']?></h6>
                                            </div>
                                            <div class="row">
                                                <h6 id = "item_qnt">QNT: <?php echo $rows['quantity']?></h6>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-9">

                                            <h5 style="float:right ;"
                                            id = "order_menu_price"> PRICE: <?php echo $rows['item_price']?></h5>
                                        </div>
                                    </div>
                                    <?php
                              }
                            }
                                ?>


                                </div>
                                <div class="card-footer cardFooter">
                                    <div class="row">
                                        <div class="col-6">
                                            <!-- <h5>RATING</h5>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span> -->
                                        </div>
                                        <div class="col-6">
                                            <div class="row" style="float: right;">
                                                <div class="col">
                                                <?php

                                                                                        
                                                    if($conn->connect_error){
                                                    die('Connection failed : ' . $conn->connect_error);
                                                    }else{
                                                    // echo " uyyy". $category;
                                                    $query = "SELECT * FROM `order_total` WHERE `order_id` = $order_id ";

                                                    // echo $order_id;
                                                    $result_total = mysqli_query($conn,$query);
                                                    $rows = mysqli_fetch_assoc($result_total);

                                                    ?>
                                                    <h6 id = "order_total">TOTAL: <?php 
                                                    if($rows == NULL){
                                                        echo "0.00";

                                                    }else{
                                                        echo $rows['total'];
                                                    }

                                                    
                                                    ?></h6>



                                                    <?php
                                                    
                                                    }
                                                        ?>
                                                </div>
                                   
                                            </div> 
                                            <br> 
                                            <div class="row" style="justify-content: right; margin: 5px;">
                                                <div class="col-sm-3"> 
                                                    <button class="btn" style="width:100px ;background-color:#FFA500 ; font-size:small">BUY AGAIN</button>
                                                    
                                                </div>
                                                
                                                <div class="col-sm-3">
                                                    <button class="btn" style="width:100px ;background-color:#FFA500 ; font-size:small">CONTACT</button>
                                                </div>
                                                 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                              }
                            }
                                ?>
                        </center>
                        
                    </div>
                </div>
                
            </div>
         
            
         

        </div>

      </div>
      
    </div>
    <footer>
        <div class="footer container-fluid" style="background-color:black ;margin-top: 10px; color: white;">
            <div class="row" style="padding-top:2% ;">
                <div class="col-lg-6 col-md-6 col-sm-6" >
                    <div class="row">
                        <h2>ABOUT US</h2>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, atque?
                        <br> Libero odit illum dolor odio cumque at harum eius debitis aliquam aliquid.
                        <br> Odit porro veritatis molestias quo libero labore dolore?</p>
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
                                    <div class="socialmedia"  >
                                        <a href="#"><i class="fa-brands fa-facebook "></i></a>
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
                            <p>09123456789</p>
                        </center>
                    </div>
                </div>
             
                
                
            </div>
            <div class="footerline"></div>
            <!-- <hr> -->
            <div class="row">
                <div class="col-lg-6">
                    <small>@2021 cornpups kenan's korean Corndog, Nasugbu Batangas, All Rights Reserved</small>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6" style="display: flex; justify-content:space-evenly;">
                 
                    <div class="col-4" >
                        <a href=""><small style="float:right; color: white;" >PRIVACY POLICY</small></a> 
                         
                     </div>
                     
                     <div class="col-4" >
                        
                        <a href=""><small style="float:left; color: white;">TERMS OF USE</small></a> 
                     </div>
                </div>
               
               
               
                
            </div>
        </div>
        
    </footer>

    
<script>
var active = document.getElementById('nav_orders');
active.setAttribute('class','nav-link my-nav-link my-active',);
</script>
</body>
</html>