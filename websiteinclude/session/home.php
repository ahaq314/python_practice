<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is Home page</h2>
    <!-- <a href="index.php">Index</a> -->

    <form action="home.php" method="post">
        <button type="submit" name="logout">LogOut</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location:index.php");


    }
    ?>