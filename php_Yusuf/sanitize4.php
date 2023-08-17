<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanitize4.php</title>
</head>

<body>
    <form action="sanitize4.php" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="">

        <button type="submit" name="submit">Login</button>

    </form>

    <?php
    if (isset($_POST["submit"])) {
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        echo $email;
    }
    ?>
</body>

</html>