<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="isset_empty_1.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="user_name" value="" placeholder="haq5005">
        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="pass_word">
        <br>

        <button type="submit">Login</button>
        <br>





    </form>

    <?php
    if(!empty($_POST["user_name"]) && !empty($_POST["pass_word"])){
        echo ($_POST["user_name"]),"<br>";
        echo ($_POST["pass_word"]),"<br>";
    }else{
        echo"Empty Credential";
    }



    ?>
</body>
</html>