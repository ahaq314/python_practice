<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radio.php" method="post">
        <input id="card1" type="radio" value="Visa" name="cards">
        <label for="card1">Visa</label>
        <br>

        <input id="card2" type="radio" value="mastercard" name="cards">
        <label for="card2">Mastercard</label>
        <br>

        <input id="card3" type="radio" value="HDFC" name="cards">
        <label for="card3">HDFC</label>
        <br>


        <button name="submit">Submit</button>

    </form>
</body>

</html>


<?php

if (isset($_POST["submit"])) {
    // echo "<pre>";
    // print_r($_POST);
    if (isset($_POST["cards"])) {
        echo $_POST["cards"];
    } else {
        echo "Not Selected any card";
    }
}
// if(isset($_POST["cards"])){
//     $cardd= $_POST["cards"];
//     echo $cardd;
// }







?>