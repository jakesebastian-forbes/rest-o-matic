<?php
    if($_SESSION['privilage'] != 'client'){
        echo "not authorized. client only!";
        header("Location: admin_home.php");

    }
    else{
        echo "OKay.";


    }
?>