<head>
<style>
.nav-item:hover{
  background-color: #df8f279e;
    border-radius: 7px;
    width:80%;

}

</style>
</head>

<div class="row">
      <nav class="navbar mynavbar" style="">
        
          <div class="d-flex flex-row mx-51" style="color:white">
            <a href="index.php">
            <img src="images/icon/web_icon.png" alt="web_icon.png" style="max-height: 70px;" >
            </a>
            <h1 class="myheading2 px-3 my=2" style="padding-bottom: 0 ">MENU</h1>
          </div>
        <div id = "sidebar-btn" style="margin-right: 20px;"> 
        <nav class="navbar bg-dark" >

          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
              aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                  <?php echo $_SESSION["username"];?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="#">ACCOUNT</a> -->
                    
                    <a class="nav-link my-nav-link" aria-current="" href="client_ui_profile.php" 
                    id = "nav_account" style ="">
                    <span><img src="images/icon/account_icon.png" alt="account_icon" class = "nav_icon"></span>
                    ACCOUNT</a>
                  </li>
                  <li class="nav-item">
                  <span><img src="images/icon/cart_icon.png" alt="account_icon" class = "nav_icon"></span>
                    <a class="nav-link my-nav-link" href="client_ui_cart.php">CART</a>
                  </li>
                  <li class="nav-item">
                  <span><img src="images/icon/purchases_icon.png" alt="account_icon" class = "nav_icon"></span>
                    <a class="nav-link my-nav-link" href="client_ui_order.php">PURCHASES?</a>
                  </li>
                  <li class="nav-item">
                  <span><img src="images/icon/reservation_icon.png" alt="account_icon" class = "nav_icon"></span>
                    <a class="nav-link my-nav-link" href="client_ui_reservation.php">RESERVATION</a>
                  </li>
                  <li class="nav-item">
                  <span><img src="images/icon/review_icon.png" alt="account_icon" class = "nav_icon"></span>
                    <a class="nav-link my-nav-link" href="client_ui_review.php">REVIEWS</a>
                  </li>
               
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      GO TO
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#classics">CLASSICS</a></li>
                      <li><a class="dropdown-item" href="#holeMozza">WHOLE MOZZARELLA</a></li>
                      <li><a class="dropdown-item" href="#halfMozza_halfSausge">HALF MOZZARELLA AND HALF SAUSGAE</a></li>
                      <li><a class="dropdown-item" href="#specials">SPECIALS</a></li>
                      </ul>
                  </li>
                </ul>
                <div class="position-absolute bottom-0 end-0 m-3">
                  
                <a href="func_logout.php">LOGOUT</a>
               </div>
               </div>
        </nav>
        
        </nav>
    </div>