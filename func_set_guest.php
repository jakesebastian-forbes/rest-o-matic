<?php
session_start();

if(isset($_SESSION['privilage'])){

    if($_SESSON['privilage'] == 'admin'){
        header("Location: admin_home.php");

    }elseif($_SESSON['privilage'] == 'client'){
        header("Location: client_ui.php");
    }


}else{
$_SESSION["privilage"] = 'guest'; 

}

            
            
header("Location: client_ui.php");
            
?>