
<?php //echo $page_title; ?>
<head>

<link rel="icon" type="image/x-icon" href="images/icon/web_icon.png"/> 
    <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/general.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 

  <style>
.my-side-banner{
    display: inline-flex;
    background-color: #ff6e6e;
    border-radius: 30px;
    padding-left: 2%;
    padding-right: 2%;
}

#sidebar-btn-1:hover {
    background: #9a382d;

  }

  </style>
</head>

          <div class="row">
            <nav class="navbar mynavbar" style="width: 100vw; min-width: fit-content; max-height: 86px; background-color: black;">
                <div class="d-flex justify-content-start">
                  <img src="../images/icon/web_icon.png" class="px-3" alt="web_icon.png" style="max-height: 70px">
                    <h1 class="myheading1 mt-2" style="padding-top: 7px; color: white;"><?php echo $page_title; ?></h1>
                </div>
                <nav class="navbar">
                  <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#"></a> -->
                    <button class="navbar-toggler toggleBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                      aria-controls="offcanvasNavbar" id = "sidebar-btn-1" >
                      <span ><i class="fa-solid fa-bars" style="color: white; font-size:40px"></i></span>
                    </button>
                      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ADMIN</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item" id = "link_dashboard">
                              <a class="nav-link"  href="admin_ui_dashboard.php">
                              <span><img src="../images/icon/dashboard.png" alt="home_icon" class = "nav_icon"></span>
                              DASHBOARD</a>
                            </li>
                            <li class="nav-item"  id = "link_orders">
                              <a class="nav-link" href="admin_ui_orders.php">
                              <span><img src="../images/icon/cart_icon.png" alt="cart_icon" class = "nav_icon"></span>ORDERS</a>
                            </li>
                            <li class="nav-item"  id = "link_reservation" hidden>
                              <a class="nav-link" href="#">RESERVATION</a>
                            </li>
                            <li class="nav-item dropdown"  id = "link_reports">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <span><img src="../images/icon/purchases_icon.png" alt="order_icon" class = "nav_icon">REPORTS</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin_logs.php">LOGS</a>
                               </li>
                              </ul>
                            </li>
                            <li class="nav-item dropdown"  id = "link_management">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <span><img src="../images/icon/management.png" alt="order_icon" class = "nav_icon">
                             MANAGEMENT</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin_ui_management_employee.php">EMPLOYEE
                             
                                </a>
                                </li>
                                <li><a class="dropdown-item" href="admin_ui_management_menu.php">INVENTORY
                                </a>
                                </li>
                              </ul>
                              <li class="nav-item"  id = "link_account" hidden>
                                <a class="nav-link" href="admin_account.php">
                                <span><img src="../images/icon/account_icon.png" alt="account_icon" class = "nav_icon">ACCOUNTS</a>
                              </li>
                              <div class="position-absolute bottom-0 end-0 m-3">
                                <a href="../func/func_logout.php">
                                <button type="button" class="btn btn-danger btn-lg text-black" style="border-radius: 24px;"> 
                                LOGOUT </button>
                                </a>
                            </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                  </div>
                </nav>
            </nav>
          </div>

          
    <script src = "../bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>