<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "practice";
    $conn = "";

    try
    {
        $conn = mysqli_connect($server,$username,$password,$db,);
    }
    catch(mysqli_sql_exception)
    {
        echo "Connection Error";
    }

  
?>