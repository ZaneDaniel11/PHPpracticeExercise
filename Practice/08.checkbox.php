<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    
    <form action="08.checkbox.php" method="post">
    <label for="">Pizza</label>
    <input type="checkbox" name="pizza" value="Pizza"><br>
    <label for="">Burger</label>
    <input type="checkbox" name="burger" value="Burger"><br>
    <label for="">Lumpia</label>
    <input type="checkbox" name="lumpia" value="Lumpia"><br>
    <label for="">Shomai</label>
    <input type="checkbox" name="shomai" value="Shomai"><br>
    <input type="submit" name="Submit" value="Submit">

    </form>
</body>
</html>

<?php 

if(isset($_POST["Submit"]))
{
    if(isset($_POST["pizza"]))
    {
        echo "You love Pizza <br> "; 
    }
    else{
        echo "You hate Pizza Awhh <br>";
    }
    if(isset($_POST["burger"]))
    {
        echo "You love Burger";
    
    }
    else{
        echo "You hate burger Awhh <br>";
    }
    if(isset($_POST["lumpia"]))
    {
        echo "You love Lumpia <br>";
    }
    else{
        echo "You hate Lumpia Awhh <br>";
    }


    
}

?>