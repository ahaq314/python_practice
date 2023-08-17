<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox</title>
</head>

<body>
    <form action="checkbox2.php" method="POST">
        <input type="checkbox" id="pizza" name="pizza" value="Pizza">
        <label for="pizza">Pizza</label>
        <br>

        <input type="checkbox" id="coke" name="coke" value="Coke">
        <label for="pizza">Coke</label>
        <br>

        <input type="checkbox" id="french_fries" name="frenchfries" value="French Fries">
        <label for="pizza">French Fries </label>
        <br>

        <input type="checkbox" id="pastry" name="pastry" value="Pastry">
        <label for="pastry">Pastry</label>
        <br>

        <button type="submit" name="submit" value="submit">Submit</button>
        <br>

    </form>

    <?php

    if (isset($_POST["submit"])) {
        if (isset($_POST["pizza"])) {
            echo "You like {$_POST["pizza"]}", "<br>";
        }


        if (isset($_POST["coke"])) {
            echo "You like {$_POST["coke"]}", "<br>";
        }


        if (isset($_POST["frenchfries"])) {
            echo "You like {$_POST["frenchfries"]}", "<br>";
        }


        if (isset($_POST["pastry"])) {
            echo "You like {$_POST["pastry"]}", "<br>";
        }
    }




    ?>


</body>

</html>