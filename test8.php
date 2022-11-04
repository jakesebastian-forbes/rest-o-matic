
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
$page_title = "restomatic";
include ('test7.php');
echo"<script>

let login_btn = document.createElement('a');
login_btn.textContent ='LOGIN';

login_btn.setAttribute('type','button');
login_btn.setAttribute('class','mybtn1 my-auto');
login_btn.setAttribute('href','login.php');
document.getElementById('buttonss').append(login_btn);

let aboutus_btn = document.createElement('a');
aboutus_btn.textContent ='ABOUT US';

aboutus_btn.setAttribute('type','button');
aboutus_btn.setAttribute('class','mybtn1 my-auto');
aboutus_btn.setAttribute('href','about_us.php');
document.getElementById('buttonss').append(aboutus_btn);

</script>";

?>

<br>

</body>
</html>