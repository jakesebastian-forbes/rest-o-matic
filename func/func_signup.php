<?php
$conn = new mysqli('localhost','root','','restomatic_db');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email =$_POST['email'];
$phonenumber = $_POST['mobile_number'];
$address = $_POST['address'];
$birthday = $_POST['birthdate'];
// $profile = $_POST['profile1'];
$profile = mysqli_real_escape_string($conn,file_get_contents($_FILES['myprofile']["tmp_name"]));

$firstname = ucfirst($firstname);
$lastname = ucfirst($lastname);
$username = strtolower($username);



$hash_password = password_hash($password, PASSWORD_DEFAULT);
//db connection



if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = "INSERT INTO `client_account`(`firstname`, `lastname`, `username`, `password`, `email`,
    `mobile_number`, `address`, `birthdate`,`profile_picture`) VALUES
    ('$firstname','$lastname','$username','$hash_password','$email','$phonenumber','$address','$birthday','$profile')";

    // $stmt = $conn->prepare("INSERT INTO `client_account`(`firstname`, `lastname`, `username`, `password`, `email`,
    //  `mobile_number`, `address`, `birthdate`,`profile_picture`) VALUES
    //  (?,?,?,?,?,?,?,?,?)");

    //  $stmt->bind_param("sssssssss",$firstname,$lastname,$username,$hash_password,$email,$phonenumber,$address,$birthday,$profile);
    //  $stmt->execute();
     
    if (mysqli_query($conn, $stmt)) {
        echo "registration successfully";
        header("Location: ../login.php?registration=success");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
  
}

?>
