<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Lang</title>
</head>
<body>
   
    <form action="0.1practiceLang.php" method="post">

        <button name="valueOf1" value=1>1</button>
        <button name="valueOf2" value=2>2</button>
        <button name="plus" value=+>+</button>
        <br>
        <input type="submit" name="equals" value="submit">
    </form>
</body>
</html>

<?php

$value1 = $_POST["valueOf1"];
$value2 = $_POST["valueOf2"];
$plus = $_POST["plus"];



if(isset($_POST["equals"]))
{
    
}

?>