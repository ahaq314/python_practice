<?php
function simple(){
    static $x=0;
    echo $x;
    $x++;
}

simple();
simple();
simple();

?>

