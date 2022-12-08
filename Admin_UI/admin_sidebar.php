
<?php //echo $page_title; ?>
<head>
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
                    <h1 class="myheading1" style="padding-top: 7px; color: white;"><?php echo $page_title; ?></h1>
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
                            <li class="nav-item">
                              <a class="nav-link active"  href="admin_ui_dashboard.php">
                              <span><img src="../images/icon/dashboard.png" alt="home_icon" class = "nav_icon"></span>
                              DASHBOARD</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="ADMIN_ORDER_NEW.php">
                              <span><img src="../images/icon/cart_icon.png" alt="cart_icon" class = "nav_icon"></span>ORDERS</a>
                            </li>
                            <!-- <li class="nav-item">
                              <a class="nav-link" href="#">RESERVATION</a>
                            </li> -->
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <span><img src="../images/icon/purchases_icon.png" alt="order_icon" class = "nav_icon">REPORTS</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin_logs.html">LOGS</a>
                               </li>
                              </ul>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <span><img src="../images/icon/management.png" alt="order_icon" class = "nav_icon">
                             MANAGEMENT</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin_employee_management.php">EMPLOYEE
                             
                                </a>
                                </li>
                                <li><a class="dropdown-item" href="admin_menu_1.php">INVENTORY
                                </a>
                                </li>
                              </ul>
                              <li class="nav-item">
                                <a class="nav-link" href="#">
                                <span><img src="../images/icon/account_icon.png" alt="account_icon" class = "nav_icon">ACCOUNTS</a>
                              </li>
                              <li class="nav-item">
                                <a href="func_logout.php">
                                <button type="button" class="btn btn-danger btn-lg text-black" style="border-radius: 24px;"> 
                                LOGOUT </button>
                                </a>
                            </li>
                            </li>
                          </ul>
                        </div>
                      </div>
                  </div>
                </nav>
            </nav>
          </div>

          
    <script src = "../bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>