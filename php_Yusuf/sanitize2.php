


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanitize2</title>
</head>

<body>
    <form action="sanitize2.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="">
        <br><br>

        <label for="age">Age</label>
        <input type="text" name="age" id="age" value="">
        <br><br>

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
        <br><br>




        <button name="submit" type="submit">Login</button>
    </form>

    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    


    if (isset($_POST["submit"])) {
        // $username=$_POST["username"];
        $username =filter_input(INPUT_POST, "username",FILTER_SANITIZE_SPECIAL_CHARS);
        // $username=filter_var($_POST["username"],FILTER_SANITIZE_STRING);
        echo $username;
        echo "<br>";

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        echo $age;
        echo "<br>";



        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        // $name=filter_var($_POST["name"],FILTER_SANITIZE_SPECIAL_CHARS);
        echo $name;
        echo "<br>";
    }

    ?>

</body>

</html>