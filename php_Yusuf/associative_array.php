<!-- associative arrays are key value pairs -->

<?php
    $capitals=array("USA"=>"Washington D.C",
                    "Japan"=>"Tokyo",
                    "India"=>"New Delhi",
                    "Bangladesh"=>"Tokyo");

// echo $capitals["Japan"],"<br>";
// echo $capitals["India"];"<br>";

array_pop($capitals);               //removes last key value pair
array_shift($capitals);             //removes first key value pair

$capitals["USA"]="Las Vegas";           //Updates if already existing key
$capitals["China"]="Bejing";            //Adds if doesnot exist alread

foreach($capitals as $key => $value){   //assigns country and capital to two variables $key and $value
    echo"{$key}={$value} <br>";

}

$keyss=array_keys($capitals);
foreach($keyss as $key){
    echo $key;
    echo "<br>";


}

?>