<?php
$password1="jerry123";
$hashed1=password_hash($password1,PASSWORD_DEFAULT);

if(password_verify($password1,$hashed1)){
    echo "Password verified";
}else{
    echo "Wrong Password";
}
