<?php

session_start();
echo "Session Array:";
print_r($_SESSION);
echo "\n";
echo "Sess_ID ";
echo SESSION_ID();

// remove all session variables
session_unset();
echo "Unset";
// destroy the session
echo "Session Array:";
print_r($_SESSION);
echo "\n";
echo "Sess_ID ";
echo SESSION_ID();
// echo "Destroyed";
session_destroy();

echo "Session Array:";
print_r($_SESSION);
echo "\n";
echo "Sess_ID ";
echo SESSION_ID();

header("Location: login.php");
echo "redirecting";






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="test.php">Redirect</a>
    
</body>
</html>