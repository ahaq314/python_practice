<?php
    $foods=array("apple","banana","coconut","orange");
    echo $food[0],("<br>");

    array_push($foods,"pineapple","kiwi");     //adds element at last of existing array
    // array_pop($foods);                         //removes last element of array
    // array_shift($foods);                         //removes first element of array

    $reversed_foods=array_reverse($foods);        //creates a completely new array by reversing the order of previous array

    echo(count($foods));


    foreach($foods as $food ){
        echo $food."<br>";


    }

    
    foreach($reversed_foods as $reversed_food ){
        echo $reversed_food."<br>";


    }



