<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get&post.php" method="get"> 
        <label for="name">Name: </label>
        <input type="text" name="user_name" id="name"> <br>
        <label for="password">Password: </label>
        <input type="password" name="pass_word" id="password">
        <button>Login</button>
    </form>

    <?php
    echo $_GET["user_name"];
    echo $_GET["pass_word"];
    ?>
</body>
</html>
