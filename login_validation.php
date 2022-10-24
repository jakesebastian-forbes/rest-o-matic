<?php

$login_username = $_POST['login_username'];
$login_password = $_POST['login_password'];

//db connection

$conn = new mysqli('localhost','root','','restomatic_db');

if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{

    $query = "SELECT `username`,`password` FROM `client_account` WHERE `username` = '$login_username' AND `password` = '$login_password' ";

    $result = mysqli_query($conn,$query);

    $credencials = mysqli_fetch_assoc($result);
    
    // echo "credits:";
    
    // echo $credencials;


    if($credencials == NULL){

        echo "I am sorry. It seems you haven't created an account. Please create an account and then try again.";


    }
    else{

        $val_username = $credencials['username'];
        $val_password = htmlspecialchars($credencials['password']);
    
        // echo "val_username : " . $val_username;
        // echo "val_password : " . $val_password;
    
    
        if($val_username == $login_username AND $val_password == $login_password){
            echo "Welcome to Restomatic ". $val_username ." !";
    
        }
        
    }  
}





?>