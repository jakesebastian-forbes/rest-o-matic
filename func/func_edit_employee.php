<?php


if(ISSET($_POST['update'])){
  $emp_id = $_POST['emp_id'];
  $emp_name = $_POST['emp_name'];
  $emp_status = $_POST['emp_status_post'];
  $emp_email =$_POST['emp_email'];
  $emp_address = $_POST['emp_address'];
  $emp_age = $_POST['emp_age'];
  $emp_contact_num = $_POST['emp_contact_num'];
  $emp_position = $_POST['emp_position_post'];
  $emp_image = $_POST['emp_image'];

  mysqli_query($conn, "UPDATE `employee` 
                      SET `emp_name`='$emp_name',`emp_status`='$emp_status',`emp_email`='$emp_email',`emp_address`='$emp_address',`emp_age`='$emp_age',`emp_contact_num`='$emp_contact_num',`emp_position`='$emp_position',`emp_image`='$emp_image' 
                      WHERE `emp_id`='$emp_id'") or

    die(mysqli_error());

}

header("Location: admin_employee_management.php")

?>