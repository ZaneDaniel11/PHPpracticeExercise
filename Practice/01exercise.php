<?php 
  $item = "Pizza";
  $price = 199;

  $quantity = $_POST["quantity"];
  $total = null;

  $total = $price*$quantity;

  echo"You order {$quantity} of {$item}";
  echo"your total is {$total}";
?>