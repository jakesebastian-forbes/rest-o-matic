<?php

session_start();
// echo "Session Array:";
// print_r($_SESSION);
// echo "\n";
// echo "Sess_ID ";
// echo SESSION_ID();
// $_SESSION['privilage'] = NULL;


$_SESSION['privilage'] = 'guest';
if(!isset($_SESSION_ID)){
    if($_SESSION['privilage'] == 'admin'){
        header("Location: admin_home.php");


    }
    elseif ($_SESSION['privilage'] == 'staff'){
      # code...
    }
    elseif($_SESSION['privilage'] == 'client'){
        header("Location: client_ui/client_ui.php");
        
    }

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Rest-o-Matic</title>
  <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png" />
  <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/general.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>

    
<?php 
$page_title = "login";
include ('test7.php');
echo"<script>

let signup_btn = document.createElement('a');
signup_btn.textContent ='SIGNUP';

signup_btn.setAttribute('type','button');
signup_btn.setAttribute('class','mybtn3 my-auto');
signup_btn.setAttribute('data-bs-toggle','modal');
signup_btn.setAttribute('data-bs-target','#reg-modal');
signup_btn.setAttribute('id','mybtn');
// signup_btn.setAttribute('style','background-color:#7ed957;color:black;display:inline;');
document.getElementById('buttonss').append(signup_btn);

</script>";
?>

<div class="container-fluid" style="
        background-color: #8ecdda;
        height: 100vh;
        width: 100%;
  
      ">
      

    <div>
      <h1 class="mytitle1" style="font-size: 10vh; padding: 30px 0px 0px 40px">
        REST-O-MATIC!
      </h1>

      <div class="row px-5 py-1 g-0" style="margin-left: 2%;">
      <!-- <div> -->
          <div class="col-lg-3 col-md-6 col-sm-6 col-6  ">
            <img src="images/2dogs.jpg" class="img img-fluid myimg" alt="2dogs" />
            <img src="images/2dogs.jpg" class="img img-fluid myimg" alt="2dogs" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="images/2dogs.jpg" class="img img-fluid myimg" alt="2dogs" />
            <img src="images/2dogs.jpg" class="img img-fluid myimg" alt="2dogs" />
          </div>
        <!-- </div> -->

        <div class="col"></div>

        <div class="col-lg-5 col-12">
          <div class="panel panel-basic border rounded" style="background-color: white; height: 100%">
            <div class="row">
              <img src="images/shop_logo2.png" class="img img-responsive rounded-circle mx-auto d-block myprof" alt="avatar_logo"
                style="
                    height: 35vw;
                    width: 40vw;
                    margin-top: -15%;
                    max-height: 180px;
                    max-width: 200px;
                    object-fit: cover;
                  "
                    
                   />
            </div>
 
            <div class = "text-center">

              <h5>LOGIN!</h5>
              <?php
                $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                // echo $full_url;
                if(strpos($full_url,"acc=null") == true ){
                   echo "<p class = 'error'>
                   <span> <img src='images/icon/error.png' alt='error_icon' class = 'icon_img'></span>
                   Account does not exists.</p>";

                }else if(strpos($full_url,"credencial=mismatch") == true ){
                  echo "<p class = 'error'>
                  <span> <img src='images/icon/error.png' alt='error_icon' class = 'icon_img'></span>
                  Wrong password. Please try again.</p>";
                }
                else if(strpos($full_url,"registration=success") == true ){
                  echo '<script>
                 
                  $( document ).ready(function() {
                    $("#show_regstat_modal").click();
                });
                
                  </script>
                  ';
                }
              ?>
            </div>
            
    
            <div class="row">
              <form method="post" action="func/func_login_validation.php">  
       
                <div class="mb-2">
                  <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                  <?php
                    if(isset($_GET['user'])){
                      $user = $_GET['user'];
                      echo  '<input type="text" class="form-control text-muted hotdog1" placeholder="Username" id=""
                      aria-describedby="emailHelp" name = "login_username" value = '.$user.' required/>';

                    }else{
                      echo  '<input type="text" class="form-control text-muted hotdog1" placeholder="Username" id=""
                      aria-describedby="emailHelp" name = "login_username" required/>';


                    }
                  ?>
                  <!-- <input type="text" class="form-control text-muted hotdog1" placeholder="Username" id=""
                    aria-describedby="emailHelp" name = "login_username" required/> -->
                  <hr class="stick" />
                  <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-2">
                  <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                  <input type="password" class="form-control text-muted hotdog1" placeholder="Password"
                   id="" name = "login_password" required/>
                  <hr class="stick" />
                </div>
                <!-- <div class="mb-3 form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> -->
                    <div style = "margin-left:10%;">
                       <p><input type="checkbox" name="remember" /> Remember me</p>
                    
            
                  <a href="password_reset.php" style="color: black">
                    <p>Forgot password?</p>
                  </a>
                  </div>
                  <div style = "display: flex;
  justify-content: center;
  align-items: center;

">
                  <button type="submit" class="btn btn-primary text-center" style="
                        margin-top: 20px;
                        width: 80%;
                        background-color: #ff5757;
                        margin-bottom:4%;
                      " name = "login_btn">
                    Login
                  </button>
                </div>
              </form>
            </div>

            <!-- modal -->

            <div class="modal fade " id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">SIGNUP</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body p-4">
                    <div class="text-center">

                    <form method="post" action = "func/func_signup.php" enctype="multipart/form-data">  
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
                        <input type="tel" pattern="[0-9]{11}" class="form-control" id="modal-mobile_number" placeholder="Mobile number"
                          name="mobile_number" required/>
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="email" class="form-control" id="modal-email" placeholder="E-mail"
                          name="email" required/>
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="password" class="form-control" id="modal-password" placeholder="New password"
                          name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                          title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                      </div>
          
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="text" class="form-control" id="modal-address" placeholder="Address"
                          name="address"  />
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
                        <input type="file" id="myprofile" name ="myprofile" >

                        <!-- <img src="images/icon/customer.png" alt="" name= "profile1" hidden> -->
                      </div>
                        
                      
                    <div class="modal-footer">

                      <!-- <a href="login.php"></a><a href='login.php?hello=true'>Submit</a> -->
                      <!-- <button ></button> -->
                    <button type="submit" class="btn btn-primary">Signup</button> 
    
                    </div>

                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registration_result" id = "show_regstat_modal" hidden>
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="registration_result" tabindex="-1" aria-labelledby="registration_result" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRATION STATUS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2> <span><img src="images/icon/check_success.png" alt="" class = 'icon_img'></span> REGISTRATION SUCCESSFUL!</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


    <script>
//      $( document ).ready(function() {
//     console.log( "ready!" );
// });

      

    </script>
</body>

</html>