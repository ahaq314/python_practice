<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    $nameErr = $emailErr = $genderErr = "";
    $name = $email = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["name"])) {
            $name = $_POST["name"];
        } else {
            $nameErr = "Name is required";
        }

        if (!empty($_POST["email"])) {
            $email = $_POST["email"];
        } else {
            $emailErr = "Email is required";
        }

        if (!empty($_POST["gender"])) {
            $gender = $_POST["gender"];
        } else {
            $genderErr = "Gender is required";
        }

        if (!empty($_POST["website"])) {
            $website = $_POST["website"];
        } else {
            $website = "";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = test_input($name);
    $email = test_input($email);
    $gender = test_input($gender);
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">

        <input type="text" name="name" placeholder="Name"><span class="error">* <?php echo $nameErr; ?></span><br><br>

        <input type="email" name="email" placeholder="Email"><span class="error">* <?php echo $emailErr; ?></span><br><br>

        <input type="url" name="website" placeholder="Website"><span class="error">* <?php echo $website; ?></span><br><br>

        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Others">Others<span class="error">* <?php echo $genderErr; ?></span><br><br>

        <input type="submit" name="submit" value="Login"><br>
    </form>
    <?php
    echo "Name is :$name", "<br>";
    echo "Email is :$email", "<br>";
    echo "Website is :$website", "<br>";
    echo "Gender is:$gender", "<br>";
    ?>

</body>

</html>