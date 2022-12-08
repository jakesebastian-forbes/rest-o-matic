<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restomatic_db";

$tdate = $_POST['tdate'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(`order_id`) AS `total` FROM `client_order` WHERE `status` = 'Delivered' AND `timestamp` LIKE '%$tdate%';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    echo $row['total'];


  }
} else {
  echo "0 results";
}

// echo $arr;
mysqli_close($conn);



?>