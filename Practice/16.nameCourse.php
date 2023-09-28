<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Course</title>
</head>
<body>
    <form action="16.nameCourse.php" method="post">
        <label for="">Name</label><br>
        <input type="text" name="name"><br>
        <label for="">Course</label>
        <input type="text" name="course">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    include '16.connectdb.php';

    $name = $_POST["name"];
    $course = $_POST["course"];

    try{
        if(isset($_POST["submit"]))
        {
        $sql = "insert into coursename (Name,Course) values ($name,$course)"; 
         mysqli_connect($conn,$sql);
        }
    
    }
    catch(mysqli_sql_exception)
    {
        echo "Insert Not Succesfull";
    }
    

?>