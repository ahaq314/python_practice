<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio</title>
</head>
<body>
    <form action="radio3.php" method="post">
    <label for="visa">Visa</label>
    <input type="radio" name="credit_card" value="Visa"  id="visa">
    <br>

    <label for="mastercard">Mastercard</label>
    <input type="radio" name="credit_card" value="MasterCard"  id="mastercard">
    <br>

    <label for="aexpress">American Express</label>
    <input type="radio" name="credit_card" value="American Express"  id="aexpress">
    <br>

    <button type="submit" name="confirm" value="Submit">Submit</button>
    <button type="reset" value="Reset">Reset</button>

    </form>

    <?php

    if((!empty($_POST["credit_card"])) && (!empty($_POST["confirm"]))){
        echo "Selected Card is :{$_POST["credit_card"]}";
    }else{
        echo"Select card first";
    }
    ?>

</body>
</html>