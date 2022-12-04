<?php

$item_name = $_POST['item_name'];
$item_category = $_POST['category'];

$int_itm_category = (int)$item_category;
$int_itm_category = $int_itm_category + 1;

$int_cat_id = (int)$item_category;
$int_cat_id = $int_cat_id + 1;

// $category_id = $_POST['category_id'];
$short_desc =$_POST['short_desc'];
$item_price = $_POST['item_price'];
// $item_w_fries = $_POST['with_fries'];
$item_img = $_POST['item_img'];



$conn = new mysqli('localhost','root','','restomatic_db');

if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO `menu`(`item_name`, `category_id`,`item_category`, `item_desc`, `item_price`, `img`) 
    VALUES (?,?,?,?,?,?)");

     $stmt->bind_param("ssssss",$item_name, $int_cat_id, $int_itm_category, $short_desc,$item_price,$item_img);
     $stmt->execute();
     echo  '<script>alert("Added successfully")</script>';
     $stmt->close();
     $conn->close();

     
}

header("Location: admin_menu_1.php");

?>