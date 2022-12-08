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

$sql = "SELECT `username`,COUNT(`order_id`) AS `count`,SUM(`sub_total`) AS `total` FROM `orders_content`
 WHERE `status` = 'delivered' GROUP BY `username` ORDER BY `total` DESC LIMIT 5;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  
  
  while($row = mysqli_fetch_assoc($result)) {
    echo"<div class='row'>";
    echo '<div class="col">'.$row['username'] .'</div>';
    echo '<div class="col">'.$row['count'] .'</div>';
    echo '<div class="col">'.$row['total'] .'</div>';
    echo '</div>';

  }
 
} else {
  echo "0 results";
}

// echo $arr;
mysqli_close($conn);



?>