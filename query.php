<?php


include ('db_connection.php');

$username = $_SESSION['username'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$fullname = $firstname. ' '. $lastname;
$email = $_SESSION['email'];
$phone_number = $_SESSION['mobile_number'];
$address = $_SESSION['address'];




if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
   }else{
    // echo " uyyy". $category;
  $query = "SELECT * FROM `client_account` WHERE item_category = '$category' ;";

  $result = mysqli_query($conn,$query);

  while($rows = mysqli_fetch_assoc($result))
      {


      }

    }
?>