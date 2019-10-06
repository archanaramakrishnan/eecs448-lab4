<?php
//Inside myfirstprogram.php

function product($x, $y) {
    $z = $x * $y;
    return $z;
}

function countNum()
{
  for ($i = 1; $i <= 100; $i++)
  {
    echo "<tr>";
    for ($j = 1; $j <= 100; $j++)
    {
      echo "<td>" . product($i, $j) . "</td>";
    }
    echo "</tr>";
  }
}

echo "<table>";
echo countNum();
echo "</table>";
?>
