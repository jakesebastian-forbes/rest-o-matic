<?php
    if($_SESSION['privilage'] == 'client'){
        echo "not authorized. admin only!";
        header("Location: ../client_ui/client_ui.php");

    }
    else{
        echo "OKay.";


    }
?>  