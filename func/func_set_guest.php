<?php
session_start();

// echo "Session Array:";
print_r($_SESSION);
// echo "\n";
// echo "Sess_ID ";
// echo SESSION_ID();
// echo "asdadss";
if(isset($_SESSION['privilage'])){
echo "1";


    if($_SESSION['privilage'] == 'admin'){
        header("Location: ../admin_ui/admin_dashboard.php");

    }elseif($_SESSION['privilage'] == 'client'){
        header("Location: ../client_ui/client_ui.php");
    }
    elseif($_SESSION['privilage'] == 'guest'){
        // echo "2";
    // $_SESSION["privilage"] = 'guest'; 
    header("Location: ../client_ui/client_ui.php");
    }
}
else{
    // echo "2";
$_SESSION["privilage"] = 'guest'; 
header("Location: ../client_ui/client_ui.php");
}



            
            

            
?>