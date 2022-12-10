<?php

$hash_password = password_hash("admin", PASSWORD_DEFAULT);

echo $hash_password;
?>