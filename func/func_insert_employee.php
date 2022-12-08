<?php


$emp_name = $_POST['emp_name'];
$emp_status = $_POST['emp_status_post'];
$emp_email =$_POST['emp_email'];
$emp_address = $_POST['emp_address'];
$emp_age = $_POST['emp_age'];
$emp_contact_num = $_POST['emp_contact_num'];
$emp_position = $_POST['emp_position_post'];
$emp_image = $_POST['emp_image'];


$conn = new mysqli('localhost','root','','restomatic_db');

if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO `employee`(`emp_name`, `emp_status`, `emp_email`, `emp_address`, `emp_age`, `emp_contact_num`, `emp_position`, `emp_image`) 
    VALUES (?,?,?,?,?,?,?,?)");

     $stmt->bind_param("ssssssss",$emp_name,$emp_status,$emp_email,$emp_address,$emp_age,$emp_contact_num, $emp_position, $emp_image);
     $stmt->execute();
     echo "Added successfully";
     $stmt->close();
     $conn->close();
}

header("Location: admin_employee_management.php");

?>