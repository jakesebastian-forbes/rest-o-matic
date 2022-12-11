<?php
$conn = new mysqli("localhost", "root", "" , "restomatic_db");

$emp_fname = $_POST['emp_fname'];
$emp_lname = $_POST['emp_lname'];
$emp_status = $_POST['emp_status_post'];
$emp_email =$_POST['emp_email'];
$emp_username = $_POST['emp_username'];
$emp_contact_num = $_POST['emp_contact_num'];
$position = $_POST['position'];
$emp_image = mysqli_real_escape_string($conn,file_get_contents($_FILES['profile1']["tmp_name"]));
$password = $_POST['password'];

$hash_password = password_hash($password, PASSWORD_DEFAULT);


if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = "INSERT INTO `staff_account`(`firstname`, `lastname`, `status`, `email`, `username`, `contact_number`, `password`, `privilage`, `img`) 
    VALUES ('$emp_fname','$emp_lname','$emp_status','$emp_email','$emp_username','$emp_contact_num', '$hash_password',
      '$position', '$emp_image')";

    //  $stmt->bind_param("sssssssss",$emp_fname,$emp_lname,$emp_status,$emp_email,$emp_username,$emp_contact_num, $hash_password,
    //  $position, $emp_image);
    //  $stmt->execute();
    //  echo "Added successfully";
    //  $stmt->close();
    //  $conn->close();

    //  $stmt->bind_param("sssss",$item_name,$item_category, $short_desc,$item_price,$item_img);
    //  $stmt->execute();
    //  echo "Added successfully";

     if (mysqli_query($conn, $stmt)) {
        echo "New record created successfully";
        header("Location: ../admin_ui/admin_ui_management_employee.php?added=success");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("Location: ../admin_ui/admin_ui_management_employee.php?added=failed");
      }
      
      mysqli_close($conn);
    
}

?>