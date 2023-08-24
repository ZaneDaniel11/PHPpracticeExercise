<?php

  include '13.databaseConnection.php';

  $name = $_POST["name"];
  $age = $_POST["age"];
  $birthdate = $_POST["birthdate"];
  $gender = $_POST["gender"];
  $school = $_POST["school"];
 
  if(isset($_POST["submit"]))
  {
   $query = mysqli_query("insert into registerdb (name,age,birthdate,gender,school) values ($name,$age,$birthdate,$gender,$school)")

    mysqli_connect($conn,$query);

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
    <form action="" method="post">

      <label for="">Name</label> <br>
      <input type="text" name="name"> <br>
      <label for="">age</label> <br>
      <input type="int" name="age"> <br>
      <label for="">birthdate</label> <br>
      <input type="date" name="birthdate"> <br>
      <label for="">gender</label> <br>
      <input type="text" name="gender"> <br>
      <label for="">school</label> <br>
      <input type="text" name="school"> <br>
      <button type="submit" name="submit">Submit</button>


    </form>
</body>
</html>