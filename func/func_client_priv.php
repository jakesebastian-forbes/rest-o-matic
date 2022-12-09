<?php
    if($_SESSION['privilage'] == 'admin'){
        echo "not authorized. client only!";
        header("Location: ../admin_ui/admin_dashboard.php");

    }
    else{
        // echo "OKay.";
        

    }
?>