<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restomatic_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username1 = $_POST['username'];
$password = $_POST['password'];
$email =$_POST['email'];
$phonenumber = $_POST['mobile_number'];
$address = $_POST['address'];
$birthday = $_POST['birthdate'];
$profile = mysqli_real_escape_string($conn,file_get_contents($_FILES['profile1']["tmp_name"]));
$firstname = ucfirst($firstname);
$lastname = ucfirst($lastname);
$username = strtolower($username);
$id = $_SESSION['client_id'];

// Check connection

// echo $profile;

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if($password == ""){

    $sql = "UPDATE `client_account` SET `firstname`='$firstname',
    `lastname` = '$lastname',
    `username` = '$username1',
    `email` = '$email',
    `mobile_number`= '$phonenumber',
    `address` = '$address',
    `birthdate` = '$birthday',
    `profile_picture` = '$profile'   
    WHERE `client_id` = $id";
}else{

$sql = "UPDATE `client_account` SET `firstname`='$firstname',
                            `lastname` = '$lastname',
                            `username` = '$username1',
                            `password` ='$password',
                            `email` = '$email',
                            `mobile_number`= '$phonenumber',
                            `address` = '$address',
                            `birthdate` = '$birthday',
                            `profile_picture` = '$profile'   
                            WHERE `client_id` = $id";
}
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: ../client_ui/client_ui_profile.php?update=success")

?>