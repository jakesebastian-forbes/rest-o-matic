<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restomatic_db";



$order_id = $_POST['order_id'];
$new_stat = $_POST['new_stat'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE `client_order` SET `status`= '$new_stat' WHERE `order_id` = '$order_id' ;";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>