<?php
$conn = new mysqli("localhost", "root", "" , "restomatic_db");

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$status = $_POST['status'];
$email = $_POST['email'];
$username = $_POST['username'];
$contact = $_POST['number'];
$position = $_POST['position'];

if($_FILES['profile1']["tmp_name"] == NULL){
  echo "TURE";
  // echo  $_FILES['profile1']["tmp_name"];
  $image = "";
  
$sql = "UPDATE `staff_account` 
SET `firstname`='$fname',`lastname`='$lname',`status`='$status',`email`='$email',
`username`='$username',`contact_number`='$contact',`privilage`='$position'
WHERE `staff_id` = '$id'";

}
else{
  
  $image = mysqli_real_escape_string($conn,file_get_contents($_FILES['profile1']["tmp_name"]));
$sql = "UPDATE `staff_account` 
SET `firstname`='$fname',`lastname`='$lname',`status`='$status',`email`='$email',
`username`='$username',`contact_number`='$contact',`privilage`='$position',`img`='$image' 
WHERE `staff_id` = '$id'";

}


// $image = mysqli_real_escape_string($conn,file_get_contents($_FILES['profile1']["tmp_name"]));

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "UPDATE `staff_account` 
// SET `firstname`='$fname',`lastname`='$lname',`status`='$status',`email`='$email',
// `username`='$username',`contact_number`='$contact',`privilage`='$position',`img`='$image' 
// WHERE `staff_id` = '$id'";



if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: ../admin_ui/admin_ui_management_employee.php?update=success");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();



?>