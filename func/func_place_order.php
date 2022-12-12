<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restomatic_db";

$id = $_POST['client_id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  
  die("Connection failed:" . $conn->connect_error);
  echo json_encode(array("statusCode"=>201));
}else{


    $client_id = $_POST['client_id'];

    $sql = "INSERT INTO `client_order`(`client_id`, `total`, `status`) VALUES ('$id',0,'Pending');";
    $sql2 = "SELECT LAST_INSERT_ID() AS `ID`;";
    $result = $conn->query($sql);

    $final_result = $conn->query($sql2);

    if ($final_result->num_rows > 0) {

    if($row = $final_result->fetch_assoc()) {
        echo $row['ID'] . " " ;
        echo json_encode(array("statusCode"=>200));

    }
    } else {
    echo "0 results";
    }
    $conn->close();

    }


?>