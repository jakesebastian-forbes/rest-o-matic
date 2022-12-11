<?php

$conn = new mysqli('localhost','root','','restomatic_db');

$item_name = $_POST['item_name'];
$item_category = $_POST['category'];
$short_desc =$_POST['short_desc'];
$item_price = $_POST['item_price'];
// $item_w_fries = $_POST['with_fries'];
$item_img = mysqli_real_escape_string($conn,file_get_contents($_FILES['profile1_add']["tmp_name"]));

// echo $item_img;
//db connection



if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO `menu`(`item_name`, `item_category`, `item_desc`, `item_price`,  `img`) 
    VALUES (?,?,?,?,?)");

     $stmt->bind_param("sssss",$item_name,$item_category, $short_desc,$item_price,$item_img);
     $stmt->execute();
     echo "Added successfully";
     $stmt->close();
     $conn->close();

     
}

header("Location: ../admin_ui/admin_ui_management_menu.php?added=success");

?>