<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>
<body>
    
    <form action="07.radiobutton.php" method="post">

    <input type="radio" name="onlinePayment" value="Gcash"> Gcash <br>
    <input type="radio" name="onlinePayment" value="Maya"> Pay Maya <br>
    <input type="radio" name="onlinePayment" value="Paypal"> Pay Pal <br>
    <input type="submit" value="Confirm" name="confirm"> 

    </form>

</body>
</html>

<?php


  //Switch

    // if(isset($_POST["confirm"]))
    // {
    //     $OnlinePayment = null;

    //     if(isset($_POST["onlinePayment"]))
    //     {
    //         $OnlinePayment = $_POST["onlinePayment"];
    //     }

    //     switch($OnlinePayment){
    //         case "Gcash":
    //             echo"You Selected Gcash";
    //             break;
    //         case "Maya":
    //             echo"You Selected Maya";
    //             break;
    //         case "Paypal":
    //             echo"You Selected Paypal";
    //             break;

    //         default:
    //         echo "Please Select Payment Option";
    //         break;
    //     }

    // }
            //If Statement
    // if(isset($_POST["confirm"]))  
    // {
     
       
    //     $onlineOption = U_UNDEFINED_VARIABLE;
    //     if( $onlineOption = $_POST["onlinePayment"])
    // {

      
    //     if($onlineOption == "Gcash")
    //     {
    //         echo"You Selected Gcash";
    //     }

    //     elseif($onlineOption == "Maya")

    //     {
    //         echo"You selected PayMaya";
    //     }

    //     elseif($onlineOption == "Paypal")
    //     {
    //         echo"You selected Paypal";
    //     }

    //     else
    //     {
    //         echo"Please Select Payment option";
    //     }
        
    // }

    // else
    // {

    // }
    
    // }
    // else
    // {

    // }

    if (isset($_POST["confirm"])) {
        $onlineOption = isset($_POST["onlinePayment"]) ? $_POST["onlinePayment"] : "";
    
        if ($onlineOption == "Gcash") {
            echo "You Selected Gcash";
        } elseif ($onlineOption == "Maya") {
            echo "You selected PayMaya";
        } elseif ($onlineOption == "Paypal") {
            echo "You selected Paypal";
        } else {
            echo "Please Select Payment option";
        }
    } else {
        // Handle the case when the "confirm" button is not set.
    }
 
    
    

?>