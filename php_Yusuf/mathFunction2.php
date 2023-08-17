<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radius</title>
</head>
<body>
    <form action="mathFunction2.php" method="post" >
        <label for="rad">Enter Radius</label>
        <input type="text" name="r">
        <button type="submit">Calculate</button>
        
        <br>
        <?php
        $radius=$_POST["r"];
        $pii=pi();


        echo "Circle Area:  ";
        echo $pii *$radius*$radius;
        echo "<br>";

        echo "Circle Perimeter:  ";
        echo 2*$pii*$radius;
        echo "<br>";

        echo  "Sphere Volume:  ";
        echo (4/3)*$pii*$radius*$radius*$radius;
        echo "<br>";
 





        ?>



    </form>





</body>
</html>