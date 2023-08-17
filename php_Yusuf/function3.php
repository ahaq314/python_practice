<?php
function hypo(int $p,int $b){
    $h=sqrt($p**2+$b**2);
    return $h;

}

echo hypo(3,4),"<br>";
echo hypo(5,12),"<br>";






?>