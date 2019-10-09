<?php

function welcome() {
  $username = $_POST["username"];
  $password = $_POST["userPassword"];

  echo "Welcome " . $username . "!<br>";
  echo "Password: " . $password . "<br>";
  echo "<br> Chosen shipping method: " . $shippingMethod . "<br><br>";
}

function receipt() {
  $quantity1 = $_POST["PairOfScissors"];
  $quantity2 = $_POST["ElmersGlue"];
  $quantity3 = $_POST["ConstructionPaper"];
  $quantity4 = $_POST["StickyNotes"];
  $quantity5 = $_POST["Tape"];

  $shippingMethod = $_POST["ship"];
  $shippingCost=0;

  if ($shippingMethod == "$50.00 over night")
  {
    $shippingCost=50;
  }
  if ($shippingMethod == "$5.00 three day")
  {
    $shippingCost=5;
  }

  echo "<table>";
  echo "<tr>";
  echo "<td>" . "&nbsp" . "</td>";
  echo "<td>" . "Quantity" . "</td>";
  echo "<td>" . "Cost Per Item" . "</td>";
  echo "<td>" . "Sub Total" . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>" . "Pair of Scissors" . "</td>";
  echo "<td>" . $quantity1 . "</td>";
  echo "<td>" . "$3.99" . "</td>";
  echo "<td>$" . 3.99*$quantity1 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>" . "Elmer's Glue" . "</td>";
  echo "<td>" . $quantity2 . "</td>";
  echo "<td>" . "$5.00" . "</td>";
  echo "<td>$" . 5.00*$quantity2 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>" . "Construction Paper" . "</td>";
  echo "<td>" . $quantity3 . "</td>";
  echo "<td>" . "$14.99" . "</td>";
  echo "<td>$" . 14.99*$quantity3 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>" . "Post-It Notes" . "</td>";
  echo "<td>" . $quantity4 . "</td>";
  echo "<td>" . "$3.88" . "</td>";
  echo "<td>$" . 3.88*$quantity4 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>" . "Tape" . "</td>";
  echo "<td>" . $quantity5 . "</td>";
  echo "<td>" . "$8.99" . "</td>";
  echo "<td>$" . 8.99*$quantity5 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>" . "Shipping Cost" . "</td>";
  echo "<td>" . $shippingMethod . "</td>";
  echo "<td>$" . $shippingCost . "</td>";
  echo "</tr>";
  echo "</table>";
}

echo welcome();
echo receipt();
?>
