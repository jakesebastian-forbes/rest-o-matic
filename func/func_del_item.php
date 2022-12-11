<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restomatic_db";

$menu_id = $_POST['id'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query = "DELETE FROM `menu` WHERE `menu_id` = '$menu_id' ";
// $query = "DELETE FROM employee WHERE emp_id='" . $_POST["$emp_id"] . "'";

if ($conn->query($query) === TRUE) {
  echo "Record deleted successfully";
  header("Location: ../admin_ui/admin_ui_management_menu.php?delete=success");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>