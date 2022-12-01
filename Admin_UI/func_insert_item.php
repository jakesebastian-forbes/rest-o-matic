<?php

$item_name = $_POST['item_name'];
$item_category = $_POST['category'];
$short_desc =$_POST['short_desc'];
$item_price = $_POST['item_price'];
$item_w_fries = $_POST['with_fries'];
$item_img = $_POST['item_img'];


//db connection

$conn = new mysqli('localhost','root','','restomatic_db');

if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO `menu`(`item_name`, `item_category`, `item_desc`, `item_price`, `with_fries`, `img`) 
    VALUES (?,?,?,?,?,?)");

     $stmt->bind_param("ssssss",$item_name,$item_category, $short_desc,$item_price,$item_w_fries,$item_img);
     $stmt->execute();
     echo "Added successfully";
     $stmt->close();
     $conn->close();

     
}

// header("Location: admin_management.php");

?>