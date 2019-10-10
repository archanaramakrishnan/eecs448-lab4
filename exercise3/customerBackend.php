<link rel="stylesheet" type="text/css" href="style.css">

<?php

function welcome() {
  $username = $_POST["username"];
  $password = $_POST["userPassword"];

  echo "<h3>Welcome " . $username . "!</h3>";
  echo "<h3>Password: " . $password . "</h3>";
  echo "<h4>Thank you for shopping with us! Here's your Receipt: <h4>";
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
  echo "<td><strong>" . "Quantity" . "</strong></td>";
  echo "<td><strong>" . "Cost Per Item" . "</strong></td>";
  echo "<td><strong>" . "Sub Total" . "</strong></td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td><strong>" . "Pair of Scissors" . "</strong></td>";
  echo "<td>" . $quantity1 . "</td>";
  echo "<td>" . "$3.99" . "</td>";
  echo "<td>$" . 3.99*$quantity1 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td><strong>" . "Elmer's Glue" . "</strong></td>";
  echo "<td>" . $quantity2 . "</td>";
  echo "<td>" . "$5.00" . "</td>";
  echo "<td>$" . 5.00*$quantity2 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td><strong>" . "Construction Paper" . "</strong></td>";
  echo "<td>" . $quantity3 . "</td>";
  echo "<td>" . "$14.99" . "</td>";
  echo "<td>$" . 14.99*$quantity3 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td><strong>" . "Post-It Notes" . "</strong></td>";
  echo "<td>" . $quantity4 . "</td>";
  echo "<td>" . "$3.88" . "</td>";
  echo "<td>$" . 3.88*$quantity4 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td><strong>" . "Tape" . "</strong></td>";
  echo "<td>" . $quantity5 . "</td>";
  echo "<td>" . "$8.99" . "</td>";
  echo "<td>$" . 8.99*$quantity5 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td><strong>" . "Shipping Cost" . "</strong></td>";
  echo '<td colspan="2">' . $shippingMethod . "</td>";
  echo "<td>$" . $shippingCost . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo '<td colspan="3"><strong>' . "Total Cost" . "</strong></td>";
  echo "<td>$" . (3.99*$quantity1+5.00*$quantity2+14.99*$quantity3+3.88*$quantity4+8.99*$quantity5) . "</td>";
  echo "</tr>";
  echo "</table>";
}

echo welcome();
echo receipt();
?>
