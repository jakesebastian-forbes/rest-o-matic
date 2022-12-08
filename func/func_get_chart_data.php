<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restomatic_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT SUM(`quantity`) as `qnt`,item_name FROM `orders_content` WHERE `status` = 'delivered' GROUP BY item_name; ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // $arr = array($row['item_name'].":".$row['qnt']./);
    echo $row['item_name'].":".$row['qnt']."/";


  }
} else {
  echo "0 results";
}

// echo $arr;
mysqli_close($conn);



?>