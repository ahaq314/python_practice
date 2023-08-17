<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mathFunction1.php" method="post">
        <label for="base">Base</label>
        <input type="number" name="base" id="base">

        <label for="power">Power</label>
        <input type="number" name="power" id="power">

        <button type='sumbit'>Sumbit</button>

        <?php

        $b=$_POST["base"];
        $p=$_POST["power"];

        $exp=pow($b,$p);
        $maximum=max($b,$p);
        echo("$exp");
        echo '<br>';
        echo("$maximum");     #and dimilarly min function works

        echo(rand());
        echo '<br>';
        echo(rand(1,6));






        ?>







    </form>
</body>
</html>