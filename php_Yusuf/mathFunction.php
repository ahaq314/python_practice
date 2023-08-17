<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mathFunction</title>
</head>
<body>
    <form action="mathFunction.php" method="post">
        <label for="var">X</label>
        <input type="text" name='var'>
        <button>Sumbit</button>
        
    </form>
    
    <?php
    $y=($_POST['var']);
    echo (abs($y));
    echo "<br>";

    echo (round($y));
    echo "<br>";
 
    echo (ceil($y));
    echo "<br>";

    echo (floor($y));
    echo "<br>";

    echo (sqrt($y));
    echo "<br>";

    $m=pi();
    echo($m);
    echo "<br>";

?>

</body>
</html>