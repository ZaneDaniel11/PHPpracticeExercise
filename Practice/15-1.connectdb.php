<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "practice";

    try
    {
        $conn = mysqli_connect($db_server,$db_username,$db_password,$db_database);
    }
    catch(mysqli_sql_exception)
    {
        echo "You are not connected";
    }



?>