<?php
$conn = new mysqli("localhost", "root", "" , "restomatic_db");
$id = $_POST['menu_id_from_this_button'];
$item_name = $_POST['item_name'];
$item_category = $_POST['category'];
$short_desc =$_POST['short_desc'];
$item_price = $_POST['item_price'];
// $item_w_fries = $_POST['with_fries'];
// $item_img = mysqli_real_escape_string($conn,file_get_contents($_FILES['profile1_add']["tmp_name"]));

// echo $id;
// Check connection

if($_FILES['new_img_menu']["tmp_name"] == NULL){
  echo "TURE";
  $sql = "UPDATE `menu` 
  SET `item_name`='$item_name',`item_category`='$item_category',`item_desc`='$short_desc',`item_price`='$item_price'
  WHERE `menu_id` = '$id'";
  
}else{

  $image = mysqli_real_escape_string($conn,file_get_contents($_FILES['new_img_menu']["tmp_name"]));
  $sql = "UPDATE `menu` 
SET `item_name`='$item_name',`item_category`='$item_category',`item_desc`='$short_desc',`item_price`='$item_price',
`img`='$image' 
WHERE `menu_id` = '$id'";

}



if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{

// $sql = "UPDATE `menu` 
// SET `item_name`='$item_name',`item_category`='$item_category',`item_desc`='$short_desc',`item_price`='$item_price',
// `img`='$image' 
// WHERE `menu_id` = '$id'";



if ($conn->query($sql) === TRUE) {
    
  echo "Record updated successfully!";
  header("Location: ../admin_ui/admin_ui_management_menu.php?update=success");
} else {
  echo "Error updating record: " . $conn->error;
  header("Location: ../admin_ui/admin_ui_management_menu.php?update=failed");
}
}
$conn->close();



?>