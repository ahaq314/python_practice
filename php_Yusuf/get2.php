<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaHut</title>
</head>
<body>
    <form action="get2.php" method="GET">
        <h2>Pizza@99</h2>

        <label for="quantity">Quantity</label>
        <input type="text" name="quant" value="" id="quantity">
        <br>

        <button type="submit">Purchase</button>

        





    </form>
    <?php

        $num=$_GET["quant"];
        $total_cost=$num*99;
        echo "Total Cost {$total_cost}";
    ?>
</body>
</html>