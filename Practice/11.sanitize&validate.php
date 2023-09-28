<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize</title>
</head>
<body>
    
    <form action="11.sanitize&validate.php" method="post">

        <label for="">Username</label>
        <input type="text" name="username" value="" placeholder="whoa"> <br>
        <label for="">Age</label>
        <input type="number" name="age" value="" placeholder="number"> <br>
        <label for="">Email</label>
        <input type="email" name="email" value="" placeholder="Enter Email"> <br>

        <input type="submit" name="submit" value="Log-ib">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"]))
                    //First right "filter_input"
    {               //This "INPUT_POST" When your method is "post", INPUT_GET if your method is get
                    //Next to your "INPUT_POST" is your target Key,And the Filter
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        
        $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        echo "Welcome {$username} age {$age} <br> and your Email is {$email}";
    }

    
    // <script> alert("HAHAHA"); </script>//
?>