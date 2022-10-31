<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Client</title>

  <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png" />
  <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css" />
  <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/general.css" />

</head>

<body>
  <div class="container-fluid" style="background-color: white;">

    <div class="row">
      <nav class="navbar mynavbar" style="">
        <div class="d-flex flex-row mx-5" style="color:white">
          <h1>MENU</h1>

        </div>

        <nav class="navbar bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
              aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                  <?php echo "ues"?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="#">ACCOUNT</a> -->
                    <a class="nav-link" aria-current="" href="#">ACCOUNT</a>
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
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
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

  <h1>CLASSICS</h1>
<?php
$category = "classics";
include('test_snippet3.php');
?>

<h1>Whole Mozzarella</h1>
<?php
$category = "Whole Mozzarella";
include('test_snippet3.php');
?>

<h1>Half Mozza Plus Half Sausage</h1>
<?php
$category = "Half Mozza Plus Half Sausage";
include('test_snippet3.php');
?>

<h1>Specials</h1>
<?php
$category = "Specials";
include('test_snippet3.php');
?>



</body>

</html>