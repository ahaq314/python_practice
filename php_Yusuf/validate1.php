<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validate</title>
</head>
<body>
    <form action="validate1.php" method="POST">
        <label for="age">Age</label>
        <input type="text" name="age" id="age">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <button type="submit" name="login">Login</button>


    </form>

    <?php
    if(isset($_POST["login"])){
        $age=filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        $email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

        if(empty($age)){
            echo "Invalid age";
        }else{
            echo "Your age is {$age}";
        }

        echo "<br>";
        if(empty($email)){
            echo "Invalid email";
        }else{
            echo "Your email is {$email}";
        }
    }
    ?>
</body>
</html>