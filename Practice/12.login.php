<?php
    session_start();
    if(isset($_POST["submit"]))
{

    if(!empty( $_POST["Username"]) && !empty( $_POST["Password"]) )
    {
        $_SESSION["Username"] = $_POST["Username"];
        $_SESSION["Password"] = $_POST["Password"];

        header("Location: 12-1.home.php");
    }

    else
    {
        echo"Username or Password is emptry";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="12.login.php" method="post">
        <label for="">Username</label><br>
        <input type="text" name="Username"> <br>
        <label for="">Password</label> <br>
        <input type="password" name="Password"> <br>
        <input type="submit" name="submit" value="Log in">

    </form>
</body>
</html>

