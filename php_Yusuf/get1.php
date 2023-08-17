<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <form action="get1.php" method="GET">
        <label for="username">Usename</label>
        <input type="text" id="username" name="user_name" value="" placeholder="haq5505">
        <br><br>

        <label for="password1">Password</label>
        <input type="password" id="password1" name="pass_name" value="">
        <br><br>

        <button type="submit">Login</button>
        <br>

        <?php
        echo "{$_GET["user_name"]}","<br>";
        echo "{$_GET["pass_name"]}";

        ?>

    </form>
</body>
</html>