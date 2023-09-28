<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    
<form action="04.forloop.php" method="post">

    <label for="">enter number to count</label>
    <input type="number" name="number">
    <input type="submit" value="count" name="submit">

</form>
</body>
</html>

<?php

$number = $_POST["number"];


for($i = 0; $i<=$number; $i++)
{
    echo $i;
}

?>