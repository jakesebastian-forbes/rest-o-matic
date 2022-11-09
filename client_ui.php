<?php
session_start();
echo "Session Array:";
print_r($_SESSION);
echo "\n";
echo "Sess_ID ";
echo SESSION_ID();

if ($_SESSION["privilage"] == 'guest'){
  // echo "GUESTTTTTTTTTTT";
 
}else{
  require "func_check_sess.php";

}

require "func_client_priv.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id ="fck"> Home | Client</title>

  <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png" />
  <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css" />
  <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/general.css" />

</head>

<body>
  <div class="container-fluid" style="background-color: white; height:100vh; width:100vw; min-width:fit-content;">

    <div class="row">

      
      <nav class="navbar mynavbar" style="">
        
          <div class="d-flex flex-row mx-51" style="color:white">
            <a href="index.php">
            <img src="images/icon/web_icon.png" alt="web_icon.png" style="max-height: 70px;" >
            </a>
            <h1 class="myheading2 px-3 my=2" style="padding-bottom: 0 ">MENU</h1>
          </div>
        <div id = "sidebar-btn"> 
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
                    <a class="nav-link" aria-current="" href="client_ui_account.php">ACCOUNT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="client_ui_order.php">ORDERS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="client_ui_reservation.php">RESERVATION</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="client_ui_reviews.php">REVIEWS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="client_ui_cart.php">CART</a>
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

        </nav>
        </div>
        </nav>
    </div>
   
    <h1 id="classics">CLASSICS</h1>
  <?php
  $category = "classics";
  include('func_menu_content.php');
  ?>

  <h1 id="wholeMozza">Whole Mozzarella</h1>
  <?php
  $category = "Whole Mozzarella";
  include('func_menu_content.php');
  ?>

  <h1 id="halfMozza_halfSausge">Half Mozza Plus Half Sausage</h1>
  <?php
  $category = "Half Mozza Plus Half Sausage";
  include('func_menu_content.php');
  ?>

  <h1 id="specials">Specials</h1>
  <?php
  $category = "Specials";
  include('func_menu_content.php');
  ?>


  

</div>


  



  <?php
  
  if ($_SESSION["privilage"] != 'client'){
    // echo "GUESTTTTTTTTTTT";
    echo"<script>
  
  
    document.getElementById('sidebar-btn').setAttribute('hidden','true'); 
   
  </script>";
  }
  ?>

<script>
    function showid(value){
    var user = parseInt(<?php echo $_SESSION['client_id']; ?>) ; 
    var menu_id = value;
    console.log('user ' +user);
    console.log('ordered '+menu_id);
  
  //  alert('added to cart!');


  $.ajax({
		url: "func_add_cart.php",
		type: "POST",
		data: {
			"client_id": user,
			"menu_id": menu_id
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
        alert("Something happened!");
				// $("#butsave").removeAttr("disabled");
				// $('#fupForm').find('input:text').val('');
				// $("#success").show();
				// $('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occurred !");
			}
			
		}
	});
    
    }

  </script>

<div class="modal fade " id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">SIGNUP</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body p-4">
                    <div class="text-center">

                    <form method="post" action = "func_signup.php">  
                      <div class="row mb-2">
                          <div class="col">
                            <input type="text" class="form-control" id="modal-firstname" placeholder="First name" name="firstname" required />
                          </div>

                          <div class="col">
                            <input type="text" class="form-control" id="modal-lastname" placeholder="Last name" name="lastname" required />
                          </div>

                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="text" class="form-control" id="modal-username" placeholder="Username"
                          name="username" required pattern=".{8,}" title="Please enter 8 Characters">
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="number" class="form-control" id="modal-mobile_number" placeholder="Mobile number"
                          name="mobile_number" required/>
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="email" class="form-control" id="modal-email" placeholder="E-mail"
                          name="email" />
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="password" class="form-control" id="modal-password" placeholder="New password"
                          name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                          title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                      </div>
          
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="text" class="form-control" id="modal-address" placeholder="Address"
                          name="address" />
                      </div>


                      <div class="row mb-2">
                        <div class="col my-2">
                          <h6>
                            Must be at least 16 years old!
                          </h6>
                        </div>
                        <div class="col">
                          <input type="date" class="form-control" id="modal-birthdate" placeholder="date" name="birthdate"  
            
                          max = "<?php  echo date("Y")-16 . "-" . date("m") . "-" .date("d");?>"
                          required />
                        </div>

                      </div>
                        

                    <div class="modal-footer">

                      <!-- <a href="login.php"></a><a href='login.php?hello=true'>Submit</a> -->
                    <button class="btn btn-primary" name = "signup_btn" method="post">Signup</button> 
    
                    </div>

                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</body>

</html>