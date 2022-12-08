<?php


$emp_fname = $_POST['emp_fname'];
$emp_lname = $_POST['emp_lname'];
$emp_status = $_POST['emp_status_post'];
$emp_email =$_POST['emp_email'];
$emp_address = $_POST['emp_address'];
$emp_age = $_POST['emp_username'];
$emp_pass = $_POST['emp_password'];
$emp_contact_num = $_POST['emp_contact_num'];
$emp_image = $_POST['profile1'];
$hash_password = password_hash($emp_pass, PASSWORD_DEFAULT);

$conn = new mysqli('localhost','root','','restomatic_db');

if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO `staff_account`(`firstname`, `lastname`, `status`, `email`, `username`, `contact_number`, `password`, `privilage`, `img`) 
    VALUES (?,?,?,?,?,?,?,?,?)");

     $stmt->bind_param("sssssssss",$emp_fname,$emp_lname,$emp_status,$emp_email,$emp_address,$emp_age, $hash_password,$emp_contact_num, $emp_image);
     $stmt->execute();
     echo "<script>alert('Added successfully')<?script>";
     $stmt->close();
     $conn->close();
}

header("Location: ../admin_ui/admin_ui_management_employee.php");

?>