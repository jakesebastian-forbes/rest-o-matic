<?php
include ('db_connection.php');

$client_id=$_POST['client_id'];
$menu_id=$_POST['menu_id'];

// $stmt->bind_param("ssssssss",$firstname,$lastname,$username,$hash_password,$email,$phonenumber,$address,$birthday);
$sql = "INSERT INTO `cart`( `client_id`, `menu_id`) 
VALUES ('$client_id','10')";
if($conn->connect_error){
    die('Connection failed:'. $conn->connect_error);

}else{
    

if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
    // $sql->execute();
    // echo "wow";
} 
else {
    echo json_encode(array("statusCode"=>201));
    // echo 'sad';
}
mysqli_close($conn);


}


?>