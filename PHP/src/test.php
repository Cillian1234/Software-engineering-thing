<?php
$password = '123';
$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_pass;
