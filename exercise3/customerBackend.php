<?php

function grade() {
  $shippingMethod = $_POST["ship"];

  echo "<br> Chosen shipping method: " . $shippingMethod . "<br>";
}

echo grade();
?>
