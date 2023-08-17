<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <form action="isset_empty2.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username">
        <br><br>


        <label for="">Password:</label>
        <input type="password" name="password">
        <br><br>

        <button type="submit" name="submit" >Sumbit</button>

        <?php

        if (isset($_POST["submit"])){
            if(!empty($_POST["username"]) && !empty($_POST["password"])){
                echo $_POST["username"];
                echo "<br>";
                echo $_POST["password"];
        } else {
                echo "Empty Credentials";
        }}




        ?>









    </form>
</body>

</html>