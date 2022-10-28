
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

$ss = "jakes";
$hash_password = password_hash($ss, PASSWORD_DEFAULT);
$verify = password_verify($ss, $hash_password);

$verify2 = password_verify($ss,"$2y$10$3LZ3jvOqATPFCpfMAVirp.TcKCLBzgooTCXjh0yUjOXQSVvK3Wk4i")
?>

<?php echo "encrypt = ".$hash_password;?><br>
<?php echo "verify " . $verify; ?> <br>
<?php echo "verify2 " . $verify2; ?>



    
</body>
</html>