<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Client</title>

    <!-- <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" /> -->
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>


    <!-- <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png"/> 
    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script> -->
    <!-- <link rel="stylesheet" href="css/general.css"/>
    <link rel="stylesheet" href="fabric.min.css" />
    <link rel="stylesheet" href="fabric.components.min.css" /> -->
    <!-- <script src="jquery.min.js"></script>
    <script src="fabric.min.js"></script>
    <script src="PickaDate.js"></script> -->

    <?php
    $title = "Home | Client";
    require('../func/func_must_haves.php');
  ?>

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

</head>



<body>
<?php 
      $title_sidebar = "EDIT PROFILE";
      require('client_sidebar.php');
      ?>


    <div class = "container-fluid" style ="background-color: white;">  


        <div class="col-lg-12 col-md-12 col-sm-12"></div>
        <div class="row m-5">
            <div class="panel-body border" style="width: 80vw; margin-left: auto; margin-right: auto;background-color: rgb(13, 13, 13);">
              <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                <li class="nav-item my-auto myheading1 text-start" role="presentation">
                  <p class="bi bi-gear">
                    <img src="../images/icon/gear.png" height="50px" style = "filter:invert(1)"> ACCOUNT SETTINGS </p>
                </li>
                <form method="POST" action = "../func/func_update_profile.php" enctype="multipart/form-data">
                <li class="nav-item my-4 text-end" role="presentation">
                  <button type="submit" class="btn btn-warning btn-lg text-white mx-3" style="border-radius: 24px; " > SAVE CHANGES </button>
               
                  <a href = "client_ui_profile.php">
                  <button type="button" class="btn btn-warning btn-lg text-white" style="border-radius: 24px;"
                   > CANCEL</button>
                   </a>
                </li>
              </ul>

            </div>
            <div class="panel-body border" style="width: 80vw; margin-left: auto; margin-right: auto;background-color: lightgrey;">
              
                      <?php
                      $id = $_SESSION['client_id'];
                      
            $client_id = $_SESSION['client_id'] ;
            if($conn->connect_error){
                die('Connection failed : ' . $conn->connect_error);
            }else{

            $query = "SELECT * FROM `client_account`WHERE `client_id` = '$id'";

            $result_orderID = mysqli_query($conn,$query);

            if(mysqli_num_rows($result_orderID) > 0){

            if($rows = mysqli_fetch_assoc($result_orderID))
                {
                  
                  ?>
                    
                      <div class="row m-5">
                    <div class="col-md-6">
                      <label for="inputUserName" class="form-label">Username</label>
                      <input type="text" class="form-control" id="inputUserName" value = <?php echo $rows['username']?>
                      name = "username">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmailAdd" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="inputEmailAdd" value = <?php echo $rows['email']?>
                        name = "email">
                      </div>
                      <div class="col-md-6">
                      <label for="inputName" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputName" placeholder="•••••••••"
                      name = "password">
                    </div>
                    <div class="col-md-6">
                      <label for="inputName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="inputName" value = <?php echo $rows['firstname']?>
                      name = "firstname">
                    </div>
                    <div class="col-md-6">
                      <label for="inputName" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="inputName" value = <?php echo $rows['lastname']?>
                      name = "lastname">
                    </div>
                    
                    
                      <div class="col-md-6">
                        <label for="inputPhoneNum" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="inputPhoneNum" value = <?php echo $rows['mobile_number']?>
                        name = "mobile_number">
                      </div>
                    <div class="col-md-6">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress"value = "<?php echo $rows['address']?>"
                      name = "address">
                    </div>
                    <div class="col-md-6">
                      <label for="inputMonth" class="form-label">Birthday</label>
                      <input type="date" class="form-control" id="DOB" min="1970-01-01" max="2025-12-31" value = "<?php echo $rows['birthdate']?>" 
                      name = "birthdate">
                    </div>
                    <div class="col-md-6 my-2">
                      <label for="inputImage" class="form-label">
                        <?php               
                        echo '<img class="card-img-top img img-responsive" src = "data:image/jpeg;base64,'.base64_encode($rows['profile_picture']) .'" 
                        style ="height: 200px;
                        object-fit: cover;
                        aspect-ratio: 4/3;
                        border-radius: 10px;"
                        id = "profile_pic"
                        name = "profile1"

                        />';
                        ?>
                      </label>
                      <br>
                      <input type="file" id="myFile" onchange="readURL(this)" name="profile1">
                    </div>
                    </div>
                      </form>
                
                <?php
                }
              }
            }
                 ?>
                 
                    
            </div>
        </div>
      </div>
    </div>



    <footer>
      <?php
      require "../func/func_footer.php";
      
      ?>
  </footer>

  <script>
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile_pic')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#page_footer").css("position","")
  </script>

</body>
</html>