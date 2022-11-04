<?php
    if($_SESSION['privilage'] == 'admin'){
        echo "not authorized. client only!";
        header("Location: admin_home.php");

    }
    else{
        echo "OKay.";


    }
?>