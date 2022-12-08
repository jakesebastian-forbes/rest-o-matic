<?php
include ('db_connection.php');

$client_id=$_POST['client_id'];
$menu_id=$_POST['menu_id'];
// $menu_id = 16;
// $stmt->bind_param("ssssssss",$firstname,$lastname,$username,$hash_password,$email,$phonenumber,$address,$birthday);
$sql = "DELETE FROM `cart` WHERE menu_id = '$menu_id' AND client_id = '$client_id' LIMIT 1";

if(!$conn){
    die('Connection failed:'. mysqli_connect_error());
    echo"
<script>

// console.log('$sql');
console.log('Conncetion unsuccessful');

</script>
";

}
else{
    

    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
        // $sql->execute();
        // echo "wow";
        // echo"
        // <script>
        
        // // console.log('$sql');
        // console.log('Recrod inserted');
        
        // </script>
        // ";
    } 
    else {
        echo json_encode(array("statusCode"=>201));
        // echo 'sad';
        // echo"
        // <script>
        
        // // console.log('$sql');
        // console.log('insertion error');
        
        // </script>
        // ";
    }
    mysqli_close($conn);
    

}


?>