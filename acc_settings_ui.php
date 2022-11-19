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
    <link rel="stylesheet" href="fabric.min.css" />
    <link rel="stylesheet" href="fabric.components.min.css" />
    <script src="jquery.min.js"></script>
    <script src="fabric.min.js"></script>
    <script src="PickaDate.js"></script>

</head>

<style>
.footer{
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
</style>

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
                            <li class="nav-item">
                                <button type="button" class="btn btn-danger btn-lg text-black" style="border-radius: 24px;"> LOGOUT </button>
                            </li>
                          </ul>
                </nav>
              </nav>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12"></div>
        <div class="row m-5">
            <div class="panel-body border" style="width: 80vw; margin-left: auto; margin-right: auto;background-color: rgb(13, 13, 13);">
              <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                <li class="nav-item my-auto myheading1" role="presentation">
                  <p class="bi bi-gear">
                    <img src="images/icon/gear.png" height="65px"> ACCOUNT SETTINGS </p>
                </li>
                <li class="nav-item my-auto myheading1" role="presentation">
                  <button type="button" class="btn btn-warning btn-lg text-white" style="border-radius: 24px;" > SAVE CHANGES </button>
                </li>
              </ul>

            </div>
            <div class="panel-body border" style="width: 80vw; margin-left: auto; margin-right: auto;background-color: lightgrey;">
                <form class="row m-5">
                    <div class="col-md-6">
                      <label for="inputUserName" class="form-label">Username</label>
                      <input type="text" class="form-control" id="inputUserName">
                    </div>
                    <div class="col-md-6">
                      <label for="inputName" class="form-label">Name</label>
                      <input type="text" class="form-control" id="inputName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmailAdd" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="inputEmailAdd">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPhoneNum" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="inputPhoneNum">
                      </div>
                    <div class="col-md-6">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-6">
                      <label for="inputMonth" class="form-label">Birthday</label>
                      <input type="date" class="form-control" id="DOB" name="DOB"min="1970-01-01" max="2025-12-31">
                  </form>
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

</body>
</html>