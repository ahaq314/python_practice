<?php
    $age=12;
    if ($age>19){
        echo "You are eligible for this website";
    }elseif($age>15 and $age<18){
           echo("You may try later");
        }else
    {
    echo('You are not eligible');
    }






?>


<?php
$age = 12;

if ($age > 19) {
    echo "You are eligible for this website";
} elseif ($age > 15 && $age < 18) {
    echo "You may try later";
} else {
    echo 'You are not eligible';
}
?>
