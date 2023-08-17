<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="02.mathFunctions.php" method="post">
        
        <label for="">x:</label>
        <input type="text" name="x">
        <input type="submit" name="total">

    </form>
</body>
</html>


<?php

    $x = $_POST["x"];
    $total = null;
 
    //Abstract Value
    // $total = abs($x);
    // Round off
    $total = round($x);

    //Round Down
    $total = floor($x);
    // round Up
    $total = ceil($x);
    echo $total  ;

?>