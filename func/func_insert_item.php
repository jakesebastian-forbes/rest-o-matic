<?php

$conn = new mysqli('localhost','root','','restomatic_db');

$item_name = $_POST['item_name'];
$item_category = $_POST['category'];
$short_desc =$_POST['short_desc'];
$item_price = $_POST['item_price'];
// $item_w_fries = $_POST['with_fries'];
// $item_img = mysqli_real_escape_string($conn,file_get_contents($_FILES['profile1_add']["tmp_name"]));
$item_img = mysqli_real_escape_string($conn,file_get_contents($_FILES['menu_profile']["tmp_name"]));

// echo $item_img;
//db connection
// echo '<img src = "data:image/jpeg;base64,'.base64_encode($item_img) .
// '" class="card-img-top m-auto" alt="..." >' ;


if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{

 
    $stmt = "INSERT INTO `menu`(`item_name`, `item_category`, `item_desc`, `item_price`,  `img`) 
    VALUES ('$item_name','$item_category','$short_desc','$item_price','$item_img')";

    //  $stmt->bind_param("sssss",$item_name,$item_category, $short_desc,$item_price,$item_img);
    //  $stmt->execute();
    //  echo "Added successfully";
     if (mysqli_query($conn, $stmt)) {
        echo "New record created successfully";
        header("Location: ../admin_ui/admin_ui_management_menu.php?added=success");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("Location: ../admin_ui/admin_ui_management_menu.php?added=failed");
      }
      
      mysqli_close($conn);
    

// $conn->close();
}





?>