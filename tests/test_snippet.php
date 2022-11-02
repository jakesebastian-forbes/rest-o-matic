<?php

function add2($x,$y){
    return $x + $y;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test snippet</title>
</head>
<body>

<?php

$ss = "staff";
$hash_password = password_hash($ss, PASSWORD_DEFAULT);
// $hash_password2 = password_hash($ss, PASSWORD_DEFAULT);

$verify = password_verify($ss, $hash_password);

// $verify2 = password_verify($ss,"$2y$10$3LZ3jvOqATPFCpfMAVirp.TcKCLBzgooTCXjh0yUjOXQSVvK3Wk4i");
// $verify3 = password_verify($hash_password,$hash_password2);
echo "unprotected :" . $ss ."<br>";
echo "encrypt = ".$hash_password . "<br>";
echo "verify " . $verify ;
// echo "verify2 " . $verify2 .print($verify2)  ;
// echo "verify3 " . $verify3 . print($verify3);

// echo add2(1,5);

// include'test_snippet2.php';

?>





    
</body>
</html>