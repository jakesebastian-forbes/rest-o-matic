<?php
include ('db_connection.php');

$menu_id=$_GET['menu_id'];
if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
   }else{
    // echo " uyyy". $category;
  $query = "SELECT * FROM `menu` WHERE `menu_id` = '$menu_id' ;";

  $result = mysqli_query($conn,$query);

  if($rows = mysqli_fetch_assoc($result))
      {
        echo " menuid ::: $rows['menu_id']". $menu_id;
        echo " price ::: $rows['item_price']";
        echo " w/ fries ::: $rows[with_fries]";
      }
    }
// $stmt->bind_param("ssssssss",$firstname,$lastname,$username,$hash_password,$email,$phonenumber,$address,$birthday);

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

?>

