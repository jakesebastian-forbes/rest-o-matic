<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restomatic_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query = "DELETE FROM `staff_account` WHERE `staff_id`" . $_POST["$staff_id"] . "'";
// $query = "DELETE FROM employee WHERE emp_id='" . $_POST["$emp_id"] . "'";

if ($conn->query($query) === TRUE) {
  echo "Record deleted successfully";
  header("Location: ../admin_ui/admin_ui_management_employee.php?delete=success");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>