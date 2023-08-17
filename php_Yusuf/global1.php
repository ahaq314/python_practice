<?php
$x=5;
$y=10;

function sum(){
global $x,$y;
echo "The sum is".($x+$y);
}

sum();


?>


<!-- other method -->

<?php
$a=12;
$b=13;

function difference(){
    echo "The difference is".($GLOBALS ['a']-$GLOBALS ['b']);

}
difference();
?>

