
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="06.issetAndEmpty.php" method="post">
        <label for="">Username:</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="login" name="submit">
    </form>
</body>
</html>

<?php

$username = $_POST["username"];
$password = $_POST["password"];
$login = $_POST["submit"];

if(isset($login))
{

    if(empty($username))
    {
        echo"Your username is empty";
    }
    elseif(empty($password))
    {
        echo"Your password is empty";
    }
    elseif(empty($username) && empty($password))
    {
        echo"Your password and username is Empty";
    }
    else
    {

    }



}

else
{
    echo"connot Log-in";
}

?>