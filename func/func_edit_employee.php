<?php
$conn = new mysqli("localhost", "root", "" , "restomatic_db");

// if(ISSET($_POST['update'])){
  // $emp_id = $_POST['emp_id'];
  // $emp_name = $_POST['emp_name'];
  // $emp_status = $_POST['emp_status_post'];
  // $emp_email =$_POST['emp_email'];
  // $emp_address = $_POST['emp_address'];
  // $emp_age = $_POST['emp_age'];
  // $emp_contact_num = $_POST['emp_contact_num'];
  // $emp_position = $_POST['emp_position_post'];
  // $emp_image = $_POST['emp_image'];

//   mysqli_query($conn, "UPDATE `employee` 
//                       SET `emp_name`='$emp_name',`emp_status`='$emp_status',`emp_email`='$emp_email',`emp_address`='$emp_address',`emp_age`='$emp_age',`emp_contact_num`='$emp_contact_num',`emp_position`='$emp_position',`emp_image`='$emp_image' 
//                       WHERE `emp_id`='$emp_id'") or

//     die(mysqli_error());

// }

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$status = $_POST['status'];
$email = $_POST['email'];
$username = $_POST['username'];
$contact = $_POST['number'];
$position = $_POST['position'];
$image = mysqli_real_escape_string($conn,file_get_contents($_FILES['profile1']["tmp_name"]));

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `staff_account` 
SET `firstname`='$fname',`lastname`='$lname',`status`='$status',`email`='$email',
`username`='$username',`contact_number`='$contact',`privilage`='$position',`img`='$image' 
WHERE `staff_id` = '$id'";



if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: ../admin_ui/admin_ui_management_employee.php?update=success");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();



?>