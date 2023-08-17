   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
    
   </body>
   </html>

   <?php

   $capitals=array("USA"=>"Washington DC",
                    "Japan"=>"Kyoto",
                    "South Korea"=>"Seoul",
                    "India"=>"New Delhi");

    $keyss=array_keys($capitals);
    $valuess=array_values($capitals);
    $capitalsss=array_flip($capitals);
    $capitalsssx=array_reverse($capitals);

    

    foreach($capitals as $key =>$value){
    echo"{$key}={$value} <br>";
     }
    echo "<br>";


    foreach($keyss as $key){
        echo"{$key} <br>";
    }

    echo "<br>";
    foreach($valuess as $values){
        echo"{$values} <br>";
    }

    echo "<br>";
    foreach($capitalsss as $key=>$value){
        echo"{$key}={$value} <br>";
    }

    
    echo "<br>";
    foreach($capitalsssx as $key=>$value){
        echo"{$key}={$value} <br>";
    }



    ?>


      