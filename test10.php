
<?php 
$page_title = "login";
include ('test7.php');
echo"<script>

let signup_btn = document.createElement('a');
signup_btn.textContent ='SIGNUP';

signup_btn.setAttribute('type','button');
signup_btn.setAttribute('class','mybtn1 my-auto');
signup_btn.setAttribute('href','func_signup.php');
signup_btn.setAttribute('style','background-color:#7ed957;color:black;display:inline;');
document.getElementById('buttonss').append(signup_btn);

</script>";
?>

