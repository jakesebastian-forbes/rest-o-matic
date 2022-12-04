<?php

$menu_id = $_POST['menu_id'];
$item_category = $_POST['category'];
$item_name = $_POST['item_name'];
$short_desc = $_POST['short_desc'];
$item_w_fries = $_POST['with_fries'];
$item_price = $_POST['item_price'];
$item_img = $_POST['item_img'];

$menu_id = $_POST['menu_id_upd'];

$conn = mysqli_connect('localhost', 'root', '', 'restomatic_db');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "UPDATE `menu` SET 
                    `item_category`='$item_category',
                    `item_name`='$item_name',
                    `item_desc`='$short_desc',
                    `with_fries`='$item_w_fries',
                    `item_price`='$item_price',
                    `img`='$item_img'
                    WHERE `menu_id`='$menu_id'";

if (mysqli_query($conn, $query)) {
  echo '<script>alert("UPDATE SUCCESSFULLY")</script>';
 
} else {
  echo "<script> Error updating record: </script>" . mysqli_error($conn);
}


mysqli_close($conn);

header("Location: admin_menu.php");


?>