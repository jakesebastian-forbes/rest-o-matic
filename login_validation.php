<?php

$login_username = $_POST['login_username'];
$login_password = $_POST['login_password'];

//db connection

$conn = new mysqli('localhost','root','','restomatic_db');

if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
}else{
    //staffs
    $query1 = "SELECT * FROM `staff_account` 
    WHERE `username` = '$login_username';";

    $result = mysqli_query($conn,$query1);

    $S_credencials = mysqli_fetch_assoc($result); //staff credencials
    
    // echo "credits:";
    
    // echo $credencials;


    if($S_credencials == NULL){

        //clients
        $query = "SELECT * FROM `client_account` 
        WHERE `username` = '$login_username' ";

        $result = mysqli_query($conn,$query);

        $C_credencials = mysqli_fetch_assoc($result);

        if($C_credencials == NULL){

            echo "I am sorry. It seems you haven't created an account. Please create an account and then try again.";
            echo "Client";
        }
        else{  
            //note add condition to catch user does not exists
            $val_username = $C_credencials['username'];
            $val_password = htmlspecialchars($C_credencials['password']);

            $verify = password_verify($login_password, $val_password);
    
        // echo "val_username : " . $val_username;
        // echo "val_password : " . $val_password;

        if($verify == 1 ){

            // if(!empty($_POST["remember"])) {
            //     setcookie ("username",$_POST["login_username"],time()+ 3600);
            //     setcookie ("password",$_POST["login_password"],time()+ 3600);
            //     echo "Cookies Set Successfuly";
            // } else {
            //     setcookie("username","");
            //     setcookie("password","");
            //     echo "Cookies Not Set";
            // }
            
                echo "Welcome to Restomatic ". $val_username ." !";
                echo "Success Client";

                session_start();
                $_SESSION["privilage"] = "client";
                $_SESSION["client_id"] = $C_credencials['client_id'];
                $_SESSION["firstname"] = $C_credencials['firstname'];
                $_SESSION["lastname"] = $C_credencials['lastname'];
                $_SESSION["mobile_number"] = $C_credencials['mobile_number'];
                $_SESSION["email"] = $C_credencials['email'];
                $_SESSION["username"] = $C_credencials['username'];
                $_SESSION["password"] = $C_credencials['password'];
                $_SESSION["address"] = $C_credencials['address'];
                $_SESSION["birthdate"] = $C_credencials['birthdate'];
                // $_SESSION["profile_picture"] = $C_credencials['profile_picture'];

                header("Location: user_ui.php");
                die;

        }else{
            echo "Wrong password!";
            header("login.php");
            die;

        }

            
        }

    }
    else{

        $val_username = $S_credencials['username'];
        $val_password = htmlspecialchars($S_credencials['password']);
    
        // echo "val_username : " . $val_username;
        // echo "val_password : " . $val_password;
        
        $s_verify = password_verify($login_password, $val_password);
 
        if($s_verify == 1){
            echo "Welcome to Restomatic ". $val_username ." !";
            echo "Success Staff";

            session_start();
            $_SESSION["staff_id"] = $S_credencials['staff_id'];
            $_SESSION["firstname"] = $S_credencials['firstname'];
            $_SESSION["lastname"] = $S_credencials['lastname'];
            $_SESSION["username"] = $S_credencials['username'];
            $_SESSION["password"] = $S_credencials['password'];
            $_SESSION["privilage"] = $S_credencials['privilage'];
            header("Location: admin_home.php");
            die;
    
        }
        else{
            echo "Wrong password for staff.";
            echo "val_username : " . $val_username;
            echo "val_password : " . $val_password;
            echo "s_verify " . $s_verify;
        }
        
    }  
}



?>