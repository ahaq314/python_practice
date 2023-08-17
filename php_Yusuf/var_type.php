<?php
$x=5;
$y=10;

function prod(){
    global $x,$y;
    $x=34;
    $product=$x*$y;
    $productt=global$x*global$y;

    echo $x,"<br>";
    echo $product,"<br>"; 

}

prod();
