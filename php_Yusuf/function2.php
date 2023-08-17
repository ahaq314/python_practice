<?php

function numberr($num){
    if($num%2==0){
        return "Number is even";
    }
    else{
        return "Number is odd";
    }
    
}

echo numberr(20);
echo "<br>";
echo numberr(21);
echo "<br>";
echo numberr(0);
echo "<br>";
