<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Orders | Restomatic</title>
    
    <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png"/> 
    <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/general.css"/>

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

        @media only screen and ((max-width: 992px)) {
  body {
    
  }

  #pills-tab{
    display: block;
  }
  .nav-link{
    display:inline-block;
  }
  .nav-item{
    width:max-content;

  }
}


    </style>
</head>
<body>

<div class="container-fluid">

<div>

<?php
include '../db_connection.php';
$page_title = "ORDER";

require "admin_sidebar.php";
?>
</div>

<div class="panel" style="margin-top:10px;">
            <!-- <nav class="navbar nav-pills  d-inline-flex  navbar-expand-lg align-content:vertical "style=" background-color: #FFA500; border-radius:10px;width: 100vw; border-radius:10px;"> -->
            <nav class="navbar nav-pills navbar-expand-lg mt-4 "  style="background-color:#FFA500; border-radius: 10px;" >
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#demo"  aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 10px;">
                    <i class="fa-solid fa-bars"></i>
                </button>
           

            <div id="demo" class="collapse navbar-collapse">
                  <div class="panel-body" style="width: 80vw; margin-left: auto; margin-right: auto;">
        
                    <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist" style="align-items: center;">
                        
                      <li class="nav-item my-auto  pl-3 " role="presentation" >
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true"
                        style="color:white"><span>
                        </span>ALL</button>
                      </li>
                      <li class="nav-item my-auto  pl-3" role="presentation" >
                        <button class="nav-link" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending" aria-selected="true"
                        style="color:white"><span>
                        </span>PENDING</button>
                      </li>
                      <li class="nav-item my-auto  pl-3" role="presentation">
                        <button class="nav-link" id="pills-receive-tab" data-bs-toggle="pill" data-bs-target="#pills-receive" type="button" role="tab" aria-controls="pills-receive" aria-selected="false"
                        style="color:white"><span>
                        </span>TO RECEIVE</button>
                      </li>
                      <li class="nav-item my-auto  pl-3" role="presentation">
                        <button class="nav-link" id="pills-completed-tab" data-bs-toggle="pill" data-bs-target="#pills-completed" type="button" role="tab" aria-controls="pills-completed" aria-selected="false"
                        style="color:white"><span>
                        </span>COMPLETED</button>
                      </li>
                      <li class="nav-item my-auto   pl-3" role="presentation">
                        <button class="nav-link" id="pills-cancelled-tab" data-bs-toggle="pill" data-bs-target="#pills-cancelled" type="button" role="tab" aria-controls="pills-cancelled" aria-selected="false"
                        style="color:white"><span>
                        </span>CANCELLED</button>
                      </li>
                      <li class="nav-item my-auto   pl-3" role="presentation">
                        <button class="nav-link" id="pills-return-tab" data-bs-toggle="pill" data-bs-target="#pills-return" type="button" role="tab" aria-controls="pills-return" aria-selected="false"
                        style="color:white"><span>
                        </span>RETURN/REFUND</button>
                      </li>
                    </ul> 
                  </div>
        </div> 
      </nav>
    </div>

       
<?php
// $client_id = $_SESSION['client_id'] ;
?>

    <div class="tab-content" id="pills-tabContent">
        <!-- ALL -->
  <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-home-tab">

<?php
//all
    $qry_statement = "SELECT * FROM `client_order` ";
    include "func_admin_orders.php";
?>
  
  </div>
<!-- PENDING -->
  <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-profile-tab">
  
<?php

$qry_statement = "SELECT * FROM `client_order` WHERE `status` = 'pending'";
    include "func_admin_orders.php";

?>
  </div>
  <!-- TO RECEIVE -->
  <div class="tab-pane fade" id="pills-receive" role="tabpanel" aria-labelledby="pills-contact-tab">
  
  <?php


$qry_statement = "SELECT * FROM `client_order` WHERE `status` = 'approved'";
    include "func_admin_orders.php";


?>
  
  </div>
  <!-- DELIVERED -->
  <div class="tab-pane fade" id="pills-completed" role="tabpanel" aria-labelledby="pills-contact-tab">
    
    <?php
  
$qry_statement = "SELECT * FROM `client_order` WHERE `status` = 'delivered'";
include "func_admin_orders.php";

  
  ?>
    
    </div>
<!-- CANCELLED -->
    <div class="tab-pane fade" id="pills-cancelled" role="tabpanel" aria-labelledby="pills-contact-tab">
    
    <?php
  
   
$qry_statement = "SELECT * FROM `client_order` WHERE `status` = 'cancelled'";
include "func_admin_orders.php";

  
  ?>
    
    </div>

    <!-- RETURN/REFUND -->
    <div class="tab-pane fade" id="pills-return" role="tabpanel" aria-labelledby="pills-contact-tab">
    
    <?php
  
    
$qry_statement = "SELECT * FROM `client_order` WHERE `status` = 'returned'";
include "func_admin_orders.php";

  
  ?>
    
    </div>
  

</div>


<script src = "../bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>