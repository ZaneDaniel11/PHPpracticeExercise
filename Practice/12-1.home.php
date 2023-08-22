<?php
    session_start();
    echo $_SESSION["Username"].  "<br>";
    echo $_SESSION["Password"].  "<br>";

    // if Logout button is Press The Session is Destroy
    if(isset($_POST["logOut"]))
    {
        session_destroy();
        header("location: 12.login.php");
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
    <form action="12-1.home.php" method="post">
       <input type="submit" name="logOut" value="Log OuT">
    </form>
</body>
</html>

