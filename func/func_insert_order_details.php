<?php
$order_id = $_POST['order_id'];
$menu_id = $_POST['menu_id'];
$qnty = $_POST['qnty'];
$fries = 0;

//db connection

$conn = new mysqli('localhost','root','','restomatic_db');

if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{

    

    $stmt = $conn->prepare("INSERT INTO `order_details`(`menu_id`, `order_id`, `quantity`, `with_fries`)
    VALUES (?,?,?,?)");


     $stmt->bind_param("ssss",$menu_id,$order_id,$qnty,$fries);
     $stmt->execute();
     echo "Added successfully";
     $stmt->close();
     $conn->close();

     
}


?>