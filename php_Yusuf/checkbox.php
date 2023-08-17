<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="checkbox.php" method="post">
        <input id="card1" type="checkbox" value="Visa" name="cards[]">
        <label for="card1">Visa</label>
        <br>

        <input id="card2" type="checkbox" value="mastercard" name="cards[]">
        <label for="card2">Mastercard</label>
        <br>

        <input id="card3" type="checkbox" value="HDFC" name="cards[]">
        <label for="card3">HDFC</label>
        <br>


        <button name="submit">Submit</button>

    </form>
</body>

</html>


<?php

if (isset($_POST["submit"])) {
    echo "<br>";
    echo "<pre>";
    print_r($_POST);
    // die;
    if (isset($_POST["cards"])) {
        echo "You have selected total cards: ". count($_POST['cards']);
        echo "<br>";

        // for ($i=0; $i<count($_POST["cards"]);$i++){
        //     echo $_POST['cards'][$i];
        //     echo '<br>';

        // }
        foreach($_POST["cards"] as $card)
        {
            echo $card."\n";
        }
    }else {
        echo "Not Selected any card";
    }
}







?>