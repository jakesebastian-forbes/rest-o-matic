<?php
session_start();

// echo "Session Array:";
// print_r($_SESSION);
// echo "\n";
// echo "Sess_ID ";
// echo SESSION_ID();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Rest-o-Matic</title>


    <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png"/> 
    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/general.css">
</head>
<body>

    <div class = "container-fluid" style ="background-image: url(images/bg/home-bg2.png); background-repeat:no-repeat; height:100vh; width:100vw;  ">  
       
            <div class = "row"> 
                <nav class="navbar mynavbar" style = "min-width:100%;">   
                    <div class="d-flex flex-row mx-5"> 
                        <img src="images/icon/web_icon.png" alt="web_icon.png" style="max-height: 70px;">  
                        <!-- <span class="navbar-brand mb-0 myheading1"></span> --> 
                        <a type ="button" class ="btn mybtn1" href = "login.php">LOGIN</a>
                        <a type ="button" class ="btn mybtn1" href="about_us.php">ABOUT US</a>
                    </div>
                </nav>      
            </div>         
            <div class ="row" >  
                <!-- height: 91.5vh; width: 90wh;  -->
                <div class = "">
                    <h1 class = "mytitle1" style ="padding: 50px 0px 0px 50px">REST-O-MATIC!</h1> 
                    <h6 class ="mytitle2" style ="padding: 0px 0px 0px 65px;">WELCOME TO REST-O-MATIC! 
                        CLICK A FEW BUTTONS AND WAIT</h6>
                        
                </div>    
                  
                <div style = "float:right;">
            <a type = "button" class ="mybtn1 myfixedbtn"
            href = "func_set_guest.php"
            action = ""
            >BROWSE</a> 
            </div>


            </div>
            


    </div>
    


</body>
</html>