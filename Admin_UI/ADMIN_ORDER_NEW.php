<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 

    <title>Admin Order</title>
</head>

<style>
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

    .nav-pills .nav-link.active {
             background-color:white;
            color: black;}
           
    .myBtn { 
            
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: white;
        border: none;
    }

        .myBtn:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .myBtn:active {
            background-color:white;
            transform: translateY(4px);
        }

</style>

<body>
    
</body>

    <div class="container-fluid">
    <?php
    $page_title = "ADMIN";
    require('admin_sidebar.php');
    ?>

        <!-- <div class="row">
            <nav class="navbar mynavbar" style="width: 100vw; min-width: fit-content; max-height: 86px; background-color: black;">
                <div class="d-flex justify-content-start">
                  <img src="images/icon/web_icon.png" class="px-3" alt="web_icon.png" style="max-height: 70px">
                  <h1 class="myheading1" style="padding-top: 7px; color: white;">ORDER</h1>
            
    
              </div>   

              <nav class="navbar">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span ><i class="fa-solid fa-bars" style="color: white; font-size:40px"></i></span>
                  </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                      <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">USERNAME</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                          <li class="nav-item">
                            <a class="nav-link"  href="#">DASHBOARD</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">ORDERS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">RESERVATION</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">REPORTS</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="admin_logs.html">LOGS</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">MANAGEMENT</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">EMPLOYEE</a></li>
                              <li><a class="dropdown-item" href="admin_menu.html">MENU</a></li>
                            </ul>
                            <li class="nav-item">
                              <a class="nav-link" href="#">ACCOUNTS</a>
                            </li>
                            <li class="nav-item">
                              <button type="button" class="btn btn-danger btn-lg text-black" style="border-radius: 24px;"> LOGOUT </button>
                          </li>
                          </li>
                        </ul>
                      </div>
                    </div>
                </div>
              </nav>
            </nav>
            
        </div> -->

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

                      <li class="nav-item my-auto myheading1 mx-2" role="presentation" >
                        <button class="nav-link active myBtn" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending" aria-selected="true"
                        style="color:black"><span>
                        </span>PENDING</button>
                      </li>
                      <li class="nav-item my-auto myheading1 mx-2" role="presentation">
                        <button class="nav-link myBtn" id="pills-approved-tab" data-bs-toggle="pill" data-bs-target="#pills-approved" type="button" role="tab" aria-controls="pills-approved" aria-selected="false"
                        style="color:black"><span>
                        </span>APPROVED</button>
                      </li>
                      <li class="nav-item my-auto myheading1 mx-2" role="presentation">
                        <button class="nav-link myBtn" id="pills-done-tab" data-bs-toggle="pill" data-bs-target="#pills-done" type="button" role="tab" aria-controls="pills-done" aria-selected="false"
                        style="color:black"><span>
                        </span>DONE</button>
                      </li>
                      <li class="nav-item my-auto myheading1 mx-2" role="presentation">
                        <button class="nav-link myBtn" id="pills-cancelled-tab" data-bs-toggle="pill" data-bs-target="#pills-cancelled" type="button" role="tab" aria-controls="pills-cancelled" aria-selected="false"
                        style="color: black"><span>
                        </span>CANCELLED</button>
                      </li>
                    </ul> 
                  </div>
        </div> 
      </nav>
    </div>
    <div class="panel-body border mt-1" style=" height:70vh;margin-left: auto; margin-right: auto; background-color:#EEEDE7; border-radius: 10px;">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab" tabindex="0">
                <div class="row">
                   <center>
                    <div class="card m-4" style="border-radius: 10px;" >
                        <div class="card-heading " style="text-align: left;margin:15px;">
                            <div class="row" style="display: flex;">
                                <div class="col clientInfo" style="text-align: left;">
                                    <h5>Frank Ocean</h5>
                                    <h6>1002354</h6>
                                </div>
                                <div class="col orderInfo" style="text-align: right;">
                                    <h5>PENDING</h5>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3  mr-2" >
                                    <img src="/images/2dogs.jpg" alt="pfp" width="90px" height="90px" style="float: left;">
                                    <div class="row">
                                        <h7>CORNDOG</h7>
                                    </div>
                                    <div class="row">
                                        <h6>x3</h6>
                                    </div>
                                </div>
                                
                                <div class="col" style="text-align: right;margin:15px;">

                                    <h5 > PRICE: 100</h5>
                                </div>
                            </div>
                                
                        </div>
                        <div class="card-footer">
                                <div class="col-12" style="justify-content: right;">
                                    <div class="row" style="text-align: right;margin:15px;"> 
                                            <h5>total: 300</h5>
                                    </div>
                                    <div class="row" style="justify-content:right; margin: 10px   ;">
                                        <div class="col-lg-1 col-md-1 col-sm-1"  >
                                                <button type="button" class="btn "  style="width:100px ;background-color :#CC2522 ;color:white; font-size:small">
                                                    DECLINE
                                                </button>
                                            </div>
                                            <div class="col-lg-1 col-md-1 col-sm-1">
                                                <button type="button" class="btn "  style="width:100px ;background-color:#FFA500 ; font-size:small">
                                                  ACCEPT
                                                </button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                      </div>
                </center>
                </div>
            
            
  
            
  
            <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab" tabindex="0">
                <div class="row">
                    <center>
                        <div class="card m-4" style="border-radius: 10px;" >
                            <div class="card-heading " style="margin:15px;">
                            <div class="row" style="display: flex;">
                                <div class="col clientInfo" style="text-align: left;">
                                    <h5>Frank Ocean</h5>
                                    <h6>1002354</h6>
                                </div>
                                <div class="col orderInfo" style="text-align: right;">
                                    <h5>APPROVED</h5>
                                </div>
                            </div>
                            
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3  mr-2" >
                                        <img src="/images/2dogs.jpg" alt="pfp" width="90px" height="90px" style="float: left;">
                                        <div class="row">
                                            <h7>CORNDOG</h7>
                                        </div>
                                        <div class="row">
                                            <h6>x3</h6>
                                        </div>
                                    </div>
                                    
                                    <div class="col" style="text-align: right;margin:15px;">

                                        <h5 > PRICE: 100</h5>
                                    </div>
                                </div>
                                    
                            </div>
                           
                            </div>
                          </div>
                    </center>
                   
                </div>
            
  
            <div class="tab-pane fade" id="pills-done" role="tabpanel" aria-labelledby="pills-done-tab" tabindex="0">
                <div class="row">
                   <center>
                    <div class="card m-4" style="border-radius: 10px;" >
                        <div class="card-heading " style="margin:15px;">
                        <div class="row" style="display: flex;">
                            <div class="col clientInfo" style="text-align: left;">
                                <h5>Frank Ocean</h5>
                                <h6>1002354</h6>
                            </div>
                            <div class="col orderInfo" style="text-align: right;">
                                <h5>DONE</h5>
                            </div>
                        </div>
                        
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3  mr-2" >
                                    <img src="/images/2dogs.jpg" alt="pfp" width="90px" height="90px" style="float: left;">
                                    <div class="row">
                                        <h7>CORNDOG</h7>
                                    </div>
                                    <div class="row">
                                        <h6>x3</h6>
                                    </div>
                                </div>
                                
                                <div class="col" style="text-align: right;margin:15px;">

                                    <h5 > PRICE: 100</h5>
                                </div>
                            </div>
                                
                        </div>
                       
                        </div>
                      </div>
                </center>
                </div>
            
            
            <div class="tab-pane fade" id="pills-cancelled" role="tabpanel" aria-labelledby="pills-cancelled-tab" tabindex="0">
                <div class="row">
                   <center>
                    <div class="card m-4" style="border-radius: 10px;" >
                        <div class="card-heading " style="margin:15px;">
                        <div class="row" style="display: flex;">
                            <div class="col clientInfo" style="text-align: left;">
                                <h5>Frank Ocean</h5>
                                <h6>1002354</h6>
                            </div>
                            <div class="col orderInfo" style="text-align: right;">
                                <h5>CANCELLED</h5>
                            </div>
                        </div>
                        
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3  mr-2" >
                                    <img src="/images/2dogs.jpg" alt="pfp" width="90px" height="90px" style="float: left;">
                                    <div class="row">
                                        <h7>CORNDOG</h7>
                                    </div>
                                    <div class="row">
                                        <h6>x3</h6>
                                    </div>
                                </div>
                                
                                <div class="col" style="text-align: right;margin:15px;">

                                    <h5 > PRICE: 100</h5>
                                </div>
                            </div>
                                
                        </div>
                       
                        </div>
                      </div>
                </center>
                </div>
            
            </div>
         </div>
            
        </div>
        </div>
    </div>
    </div>
            
      
         
    </div>

</html>