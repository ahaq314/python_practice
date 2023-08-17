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
    <h2>This is Index page</h2>
    <!-- <a href="home.php">Home</a> -->

    <form action="index.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="user_name" id="username">

        <label for="password">Password</label>
        <input type="password" name="pass_word" id="password">

        <button type="submit" name="submit">Login</button>
        <input type="submit" name="logout" value="logout">



    </form>


</body>

</html>

<?php
if (isset($_POST["submit"])) {



    if ((!empty($_POST["user_name"])) && (!empty($_POST["pass_word"]))){
        // echo "Username:".$_SESSION["username"]."<br>";
        // echo "Password:".$_SESSION["password"]."<br>";
        $_SESSION["username"] = $_POST["user_name"];
        $_SESSION["password"] = $_POST["pass_word"];

        header("Location:home.php");

    }
    else {
        echo "Missing Username/Password";
    }
if(isset($_POST["logout"])){
    session_destroy();


    }}
// $_SESSION["username"]="BroCode";
// $_SESSION["password"]="brook123";

// echo $_SESSION["username"],"<br>";
// echo $_SESSION["password"];


?>