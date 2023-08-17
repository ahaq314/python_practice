<?php
            // hashing=transforming sensitive data(password)
            // into letter/number and symbol via mathematical process.
            // (similar to encryption.Hides original data from hacker incase of database leaks)

#HASHING and SALTING

$password1="pizza123";
$salt= bin2hex(random_bytes(16));
$saltedPassword1=$password1.$salt;

$hashed1=password_hash($saltedPassword1,PASSWORD_DEFAULT);
echo $saltedPassword1."<br>";

echo $hashed1;
?>
