<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="http://localhost/PHPYUSUF/get3.php?name=John&age=25">GET_John</a>
    <br>

    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $age = $_GET['age'];
        echo "His name is $name and aged $age<br>";
    }
    ?>


    <a href="http://localhost/PHPYUSUF/get3.php?name1=Shyam&age1=45">GET_Shyam</a>
    <br>

    <?php
    if (isset($_GET['name1']) && isset($_GET['age1'])) {
        $name1 = $_GET['name1'];
        $age1 = $_GET['age1'];
        echo "His name is $name1 and aged $age1<br>";
    }
    ?>

</body>

</html>
