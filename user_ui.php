<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Client</title>

    <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png"/> 
    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/general.css"/>
    
</head>

<body>
    <div class = "container-fluid" style ="background-color: white;">  
       
        <div class = "row"> 
            <nav class="navbar mynavbar" style = "width:100vw;min-width: fit-content;max-height: 86px;">   
                <div class="d-flex flex-row mx-5" style="color:white">
                <h1>REST-O-MATIC!</h1>  
       
                </div>

                <nav class="navbar bg-dark">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">USERNAME</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">ACCOUNT</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">ORDERS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">RESERVATION</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">REVIEWS</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">CART</a>
                              </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                GO TO
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">CATEGORY 1</a></li>
                                <li><a class="dropdown-item" href="#">CATEGORY 2</a></li>
                              </ul>
                            </li>
                          </ul>
                
            </nav>
           
        </div>
    </div>
    <h1>CATEGORY 1</h1>
    <div class="row ">
    <?php
                          $conn = new mysqli('localhost','root','','restomatic_db');

                          if($conn->connect_error){
                            die('Connection failed : ' . $conn->connect_error);
                           }else{

                          $query = "SELECT * FROM `inventory`; ";
                        
                          $result = mysqli_query($conn,$query);

                          while($rows = mysqli_fetch_assoc($result))
                              {
                                
                          ?>  
      <div class="col-2">
        <div class="card h-100"> 
                       
                          <img src="<?php $rows['item_img'] ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $rows['item_name'] ?></h5>
                            <p class="card-text"><?php echo $rows['short_desc'] ?></p>
                          </div>


          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago <?php $rows['item_name'] ?></small>
          </div>
        </div>
      </div>
      <?php

        }
      }
      ?>
</div>



 
 
    <h1>CATEGORY 2</h1>
    <div class="row ">
    <?php
                          $conn = new mysqli('localhost','root','','restomatic_db');

                          if($conn->connect_error){
                            die('Connection failed : ' . $conn->connect_error);
                           }else{

                          $query = "SELECT * FROM `inventory`; ";
                        
                          $result = mysqli_query($conn,$query);

                          while($rows = mysqli_fetch_assoc($result))
                              {
                                
                          ?>  
      <div class="col-2">
        <div class="card h-100"> 
                       
                          <img src="<?php $rows['item_img'] ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $rows['item_name'] ?></h5>
                            <p class="card-text"><?php echo $rows['short_desc'] ?></p>
                          </div>


          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago <?php $rows['item_name'] ?></small>
          </div>
        </div>
      </div>
      <?php

        }
      }
      ?>
</div>

</body>
</html>