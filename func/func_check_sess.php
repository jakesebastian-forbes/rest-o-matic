<?php
if(!isset($_SESSION['username'])){
    echo "not logged in!";
    // sleep(2);
    header("Location: login.php");
}else if($_SESSION['privilage'] == 'guest'){
    echo "Welcome " . $_SESSION['username'] . "!";
}


?>