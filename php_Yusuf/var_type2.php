<?php
$x=5;
function basic(){
    global $x;
    // echo $x,"<br>";

    $x=7;
    echo $x,"<br>";

}


basic();
echo $x;




?>