<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="http://localhost/PHPYUSUF/get3.php?name=John&age=25">GET_John</a>

<?php
echo "His name is " . $_GET['name'] . " and aged " . $_GET['age'];
echo "<br>"
?>


<a href="http://localhost/PHPYUSUF/get3.php?name=Shyam&age=45">GET_Shyam</a>

<?php
echo "His name is " . $_GET['name'] . " and aged " . $_GET['age'];
?>


</body>
</html>