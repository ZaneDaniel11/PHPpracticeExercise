<?php

    include '13.databaseConnection.php';

    $username = "Zane21";
    $password = "Password21";

    $inserQuery = "INSERT INTO registration (username,password) VALUES ('$username','$password')";


  

    try
    {
    mysqli_query($conn ,$inserQuery);
    echo "Register Succesfully";
    }

    catch(mysqli_sql_exception)
    {   
        echo "Failed";
    }
    mysqli_close($conn);

?>