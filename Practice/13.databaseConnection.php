<?php

    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "register";
    $conn = "";

    try
    {
        $conn = mysqli_connect($db_server,$db_username,$db_password,$db_name);

    }

    catch(mysqli_sql_exception)
    {
        echo "You are not Connected";
    }
    
    if($conn)
    {
        echo "You are connected";
    }



?>