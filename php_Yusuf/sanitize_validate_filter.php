<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="sanitize_validate_filter.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="user_name" id="username" value="">
        <br>
        <br>

        <label for="Password">Password</label>
        <input type="password" name="pass_word" id="password" value="">
        <br>
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="">
        <br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        // $usernamee = $_POST["user_name"];
        $usernamee = filter_input(INPUT_POST,"user_name",FILTER_SANITIZE_STRING);
        echo $usernamee;
        echo "<br>";

        $passwordd = $_POST["pass_word"];
        echo $passwordd;
        echo "<br>";

        $email =filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        echo $email;
        echo "<br>";
    }
    
    ?>
</body>

</html>