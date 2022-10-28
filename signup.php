<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email =$_POST['email'];
$phonenumber = $_POST['mobile_number'];
$address = $_POST['address'];
$birthday = $_POST['birthdate'];

$hash_password = password_hash($password, PASSWORD_DEFAULT);
//db connection

$conn = new mysqli('localhost','root','','restomatic_db');

if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO `client_account`(`firstname`, `lastname`, `username`, `password`, `email`,
     `mobile_number`, `address`, `birthdate`) VALUES
     (?,?,?,?,?,?,?,?)");

     $stmt->bind_param("ssssssss",$firstname,$lastname,$username,$hash_password,$email,$phonenumber,$address,$birthday);
     $stmt->execute();
     echo "registration successfully";
     $stmt->close();
     $conn->close();

     
}

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<body onload=openInNewTab("login.php")>
    
</body>
</html> -->