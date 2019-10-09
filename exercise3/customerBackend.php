<?php

function welcome() {
  $shippingMethod = $_POST["ship"];
  $username = $_POST["username"];
  $password = $_POST["userPassword"];

  echo "Welcome " . $username . "!<br>";
  echo "Password: " . $password . "<br>";
  echo "<br> Chosen shipping method: " . $shippingMethod . "<br>";
}

function receipt() {
  $quantity1 = $_POST["Pair of Scissors"];
  $quantity2 = $_POST["Elmer's Glue"];
  $quantity3 = $_POST["Construction Paper"];
  $quantity4 = $_POST["Sticky Notes"];
  $quantity5 = $_POST["Tape"];

  echo "<table>";

  echo "</table>";
}

echo welcome();
echo receipt();
?>
