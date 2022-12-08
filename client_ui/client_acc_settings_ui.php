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
                <li class="nav-item my-auto myheading1" role="presentation">
                  <p class="bi bi-gear">
                    <img src="../images/icon/gear.png" height="50px" style = "filter:invert(1)"> ACCOUNT SETTINGS </p>
                </li>
                <li class="nav-item my-auto myheading1" role="presentation">
                  <button type="button" class="btn btn-warning btn-lg text-white" style="border-radius: 24px;" > SAVE CHANGES </button>
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
                    <form class="row m-5">
                    <div class="col-md-6">
                      <label for="inputUserName" class="form-label">Username</label>
                      <input type="text" class="form-control" id="inputUserName" value = <?php echo $rows['username']?>>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmailAdd" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="inputEmailAdd" value = <?php echo $rows['email']?>>>
                      </div>
                    <div class="col-md-6">
                      <label for="inputName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="inputName" value = <?php echo $rows['firstname']?>>
                    </div>
                    <div class="col-md-6">
                      <label for="inputName" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="inputName" value = <?php echo $rows['lastname']?>>
                    </div>
                    
                    
                      <div class="col-md-6">
                        <label for="inputPhoneNum" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="inputPhoneNum" value = <?php echo $rows['mobile_number']?>>
                      </div>
                    <div class="col-md-6">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress"value = <?php echo $rows['address']?>>
                    </div>
                    <div class="col-md-6">
                      <label for="inputMonth" class="form-label">Birthday</label>
                      <input type="date" class="form-control" id="DOB" name="DOB"min="1970-01-01" max="2025-12-31"value = <?php echo $rows['birthdate']?>>
                
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

</body>
</html>