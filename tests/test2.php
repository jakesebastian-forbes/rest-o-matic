<?php

include "test3.php";

if(isset($_POST['submit'])){


    $username = $_POST['username'];
    $password = $_POST['password'];
    $pass = md5($password);

}
// remember me



?>