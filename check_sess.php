<?php
if(!isset($_SESSION['username'])){
    echo "not logged in!";
    // sleep(2);
    header("Location: login.php");
}else{
    echo "Welcome " . $_SESSION['username'] . "!";
}


?>