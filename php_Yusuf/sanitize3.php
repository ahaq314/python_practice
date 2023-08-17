<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize3.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="">
        <br>

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
        <br>

        <button name="submit" type="submit">Login</button>
    </form>

    <?php
    if(isset($_POST["submit"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);

        echo $username;
        echo "<br>";
        echo $name;
    }
    ?>
    
</body>
</html>
