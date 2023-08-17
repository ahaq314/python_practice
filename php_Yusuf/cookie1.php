<?php
    setcookie("fav_food","pizza",time()+(86400*2),"/");
    setcookie("fav_drink","coke",time()+(86400*2),"/");
    setcookie("fav_wine","kingfisher",time()+(86400*2),"/");
    setcookie("fav_desset","vanilla",time()+(86400*3),"/");


    // foreach($_COOKIE as $key=>$value){
    //     echo "{$key} = {$value}"."<br>";
    // }


    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]}!!!";
    }
    else{
        echo"I don't know your favourite food";
    }


?>