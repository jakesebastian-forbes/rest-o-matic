<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restomatic_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$item_id = $_POST['item_id'];
$client_id = $_POST['client_id'];

$sql = "SELECT * FROM `my_cart` WHERE menu_id = '$item_id' AND client_id = '$client_id' ;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row['menu_id']."--".$row['item_name'] . "--" .  $row['item_price'] ."--". $row['qnt'] . "x--". $row['item_price'] * $row['qnt'] ;


}
} else {
  echo "0 results";
}
$conn->close();

?>