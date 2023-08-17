<?php
    $name='Bro ';
    $food='Pizza ';
    echo $name;
    echo '<br>';
    echo $food;

    echo "Hello {$name} <br>";
    echo "Hello {$food}";

    echo '<br>';
    echo 'Your name please <br>';

    $age=21;
    // echo '<br>';
    echo "You are {$age} year old <br>";

    $gpa=4.54;
    echo "Your GPA is {$gpa} <br>";

    echo "<button>Hello</button>";

    $price=6.77;
    echo "The pizza costs \${$price} <br>";

    $employed=true;
    $online=true;

    echo "{$online}";
    echo "{$employed} <br>";

    #returns 1 if boolean is true & NOTHING if false

    $total=null;
    $quantity=4;

    echo"You have ordered {$quantity}X {$food}";
    $total=$quantity*$price;
    echo"and your total is {$total}"

    


     

    




?>

