<?php
session_start();
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


/* .orderNavbar h2{
    float: left; color:white;
    padding-top: 5px; 
    margin-left:10px;
    font-size: 24px;
   } */

        .orderNavbar{
        background-color: #FFA500;
        margin-top: 10px;
        justify-content: space-between;
        
        }

/* .orderNavbar ul{
        color: white;
        display: flex;
        list-style-type: none;
        padding: 0%;
        padding-top: 1%;
        justify-content: end;
}*/

/* .orderNavbar li a{
    
    color: black;
} */

        .nav-item a{
            margin: 5px;
            color: black;
        }

        .nav-item my-nav-item :hover{
            
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
        .checked{
            color: orange;
        }
    </style>



<body>
    <div class="container-fluid" style= "padding:0px;">
        
                     
  <?php 
  $title_sidebar = "MY RESERVATIONS";
  include('client_sidebar.php');?>


      

      <div class="container">
        <div class="panel" style="background-color:black ; margin-top:10px; color:white">
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
                            <div class="card" style="width:60rem ; margin-top: 10px; margin-bottom: 10px;">
                                <div class="card-header">
                                    <h5 style="color: black ; float: right;">status</h5>
                                </div>
                                <div class="card-body cardbody">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="/images/2dogs.jpg" alt="pfp" width="90px" height="90px" style="float:left;">
                                            <div class="row">
                                                <h6>CORNDOG</h6>
                                            </div>
                                            <div class="row">
                                                <h6>3</h6>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-9">

                                            <h5 style="float:right ;"> PRICE: 100</h5>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-footer cardFooter">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>RATING</h5>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                        </div>
                                        <div class="col-6">
                                            <div class="row" style="float: right;">
                                                <div class="col">
                                                    <h6 >TOTAL: 300</h6>
                                                </div>
                                                
                                            </div> <br> <br>
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
                        </center>
                        
                    </div>
                </div>
                
            </div>

            <div class="panel-footer" style="background-color: #EEEDE7; color: black; padding: 10px">
                <h3>ABOUT US</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio accusantium doloribus tempore voluptatum, delectus esse enim nesciunt maiores cum voluptatem minima ut corrupti qui vitae voluptate aliquam sunt ex? Nobis.</p>
            </div>

        </div>

      </div>

    </div>

    <script>
    var active = document.getElementById('nav_reservation');
active.setAttribute('class','nav-link my-nav-link my-active',);
</script>s
</body>
</html>