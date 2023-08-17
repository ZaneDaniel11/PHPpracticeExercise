<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifStatement PHP</title>
</head>
<body>
    <form action="03.ifStatement.php" method="post">

      <label for="">Enter your Age</label> <br>
      <input type="number" name="number"> <br>
      <input type="submit" name="age"> <br>
    </form>
</body>
</html>


<?php
  $age = $_POST["number"];

    if($age >= 19)
    {
        echo "You can Drive";
    }
    else
    {
        echo "You cant drive";
    }

?>