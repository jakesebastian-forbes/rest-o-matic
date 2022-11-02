<?php
    if($_SESSION['privilage'] == 'client'){
        echo "not authorized. admin only!";
        header("Location: user_ui.php");

    }
    else{
        echo "OKay.";


    }
?>