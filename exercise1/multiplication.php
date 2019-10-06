<?php
//Inside myfirstprogram.php

function product($x, $y) {
    $z = $x * $y;
    return $z;
}

function countNum()
{
  //first row starting from 1 up to 100
  echo "<tr>";
  echo "<td>" . "&nbsp" . "</td>";
  for ($i = 1; $i <= 100; $i++)
  {
    echo "<td>" . $i . "</td>";
  }
  echo "</tr>";

  //print multipliction table from 1 to 100
  for ($i = 1; $i <= 100; $i++)
  {
    echo "<tr>";

    //first column starting from 1 up to 100
    echo "<td>" . $i . "</td>";

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
