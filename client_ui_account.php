<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
    <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script> 

    <title>Home | Client</title>
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
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar mynavbar" style="width: 100vw; min-width: fit-content; max-height: 86pfix                                  ; background-color: black;">
                <div class="d-flex justify-content-start">
                  <img src="images/icon/web_icon.png" class="px-3" alt="web_icon.png" style="max-height: 70px">
                  <h1 class="myheading1" style="padding-top: 7px; color: white;">REST-O-MATIC</h1>
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
                            <li class="nav-item">
                                <button type="button" class="btn btn-danger btn-lg text-black" style="border-radius: 24px;"> LOGOUT </button>
                            </li>
                          </ul>
                        </div>
                    </div>
                </nav>
                </nav>
                
        </div>

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
                          <div class="card">
                            <div class="row" style="margin-left:480px; margin-top: 5px">
                              <div class="col-md">
                                  <button type="button" class="btn btn-secondary btn-sm"><a href="/rest-o-matic-master/acc_settings_ui.html" style="text-decoration: none; color:black;"> Edit Profile</button></a>
                              </div>
                          </div>
                            <div class="row" style="margin-left:2px ;" >
                                <div class="col-md-6 col-sm-6">
                                    <h5>Username</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 text-secondary">
                                    <h5>xxxxxxx</h5>
                                </div>
                             
                            </div>
                            <div class="row" style="margin-left:2px ;">
                                <div class="col-md-6 col-sm-6">
                                    <h5>Full Name</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 text-secondary">
                                    <h5>xxxxxxx</h5>
                                </div>
                            </div>
                            <div class="row" style="margin-left:2px ;">
                                <div class="col-md-6 col-sm-6">
                                    <h5>Email</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 text-secondary">
                                    <h5>xxxxxxx</h5>
                                </div>
                                
                            </div>
                            <div class="row" style="margin-left:2px ;">
                                <div class="col-md-6 col-sm-6">
                                    <h5>Phone Number</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 text-secondary">
                                    <h5>xxxxxxx</h5>
                                </div>
                              
                            </div>
                            <div class="row" style="margin-left:2px ;">
                                <div class="col-md-6 col-sm-6">
                                    <h5>Address</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 text-secondary">
                                    <h5>xxxxxxx</h5>
                                </div>
                               
                            </div>
                          </div>
                        </div>
                      
                  <!-- </div> -->
                        <div class="col-6" style=" padding:2% ">
                            <div class="row row1">
                                <div class="col-lg-6 col-md-3 col-sm-3">
                                   <button class="btn btn-light" style="background-color: #FFA500; border: none; height: 120px; width: 240px;">
                                    <a href="/orders.html" style="text-decoration: none; color: black;">
                                        <h1 style="font-size: 200%; text-align: center; margin-top: 5px;">3</h1>
                                        ORDERS</a>
                                    </button>
                                      
                                            
                                
                                   
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-3">
                                <button class="btn btn-light" style="background-color: #FFA500; border: none; height: 120px; width: 240px;">
                                    <a href="/reservation.html" style="text-decoration: none; color: black;">
                                        <h1 style="font-size: 200%; text-align: center; margin-top: 5px;">5</h1>
                                        RESERVATION</a>
                                </button>
                             

                            </div>
                        </div>
                   </div>
                </div>
                <div class="row row2" style="margin: 7%; margin-top: 2px;">
                  <div class="col">
                    <div class="card">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ORDER NUMBER</th>
                            <th scope="col">PLACED ON</th>
                            <th scope="col">ITEM</th>
                            <th scope="col">TOTAL</th>
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
                <footer>
                  <div class="footer container-fluid" style="background-color:black ;margin-top: 20px; color: white;">
                    <div class="row" style="padding-top:1%;">
                        <div class="col-6" >
                            <div class="row">
                                <h2>ABOUT US</h2>
                            </div>
                            <div class="row">
                                <p>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG<br>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG<br>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG<br>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG</p>
                            </div>
                            
                        </div>
                        <div class="col-2">
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
                        
                        <div class="col-4">
                            <center>
                                <h5>CALL US</h5>
                                <p>(+63) 916 987 4623</p>
                            </center>
                        </div>
                        
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <small>@2021 cornpups kenan's korean Corndog, Nasugbu Batangas, All Rights Reserved</small>
                        </div>
                        <div class="col-2">
                            <small style="float:right;">PRIVACY POLICY</small>
                        </div>
                        <div class="col-2">
                            <small style="float: left">TERMS OF USE</small>
                        </div>
                       
                       
                        
                    </div>
                </div>
    </div>
  </div>
</body>
</html>