<?php

$item_name = $_POST['item_name'];
$item_type = $_POST['item_type'];
$item_quantity = $_POST['item_quantity'];
$item_price = $_POST['item_price'];
$short_desc =$_POST['short_desc'];
$item_img = $_POST['item_img'];


//db connection

$conn = new mysqli('localhost','root','','restomatic_db');

if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO `inventory`(`item_name`, `item_type`, `item_quantity`, `item_price`, `short_desc`, `item_img`) 
    VALUES (?,?,?,?,?,?)");

     $stmt->bind_param("ssssss",$item_name,$item_type,$item_quantity,$item_price,$short_desc,$item_img);
     $stmt->execute();
     echo "Added successfully";
     $stmt->close();
     $conn->close();

     
}

?>