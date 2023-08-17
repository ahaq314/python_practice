<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="checkbox1.php" method="post">

        <input id="pizza" type="checkbox" value="Pizza" name="fastfoods[]">
        <label for="pizza">Pizza</label>

        <input id="hamburger" type="checkbox" value="Hamburger" name="fastfoods[]">
        <label for="hamburger">Hamburger</label>

        <input id="frenchfries" type="checkbox" value="French Fries" name="fastfoods[]">
        <label for="frenchfries">French Fries</label>

        <input id="coke" type="checkbox" value="Coke" name="fastfoods[]">
        <label for="coke">Coke</label>


        <button name="submit">Order</button>






    </form>
</body>

</html>

<?php

if ((isset($_POST["submit"]))) {

    if ((isset($_POST["fastfoods"]))) {
        foreach ($_POST["fastfoods"] as $fastfood) {
            echo ($fastfood) . "<br>";
        }
    }
}




?>