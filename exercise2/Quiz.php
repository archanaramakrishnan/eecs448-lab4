<?php

function grade() {
  $a1 = $_POST["q1"];
  $a2 = $_POST["q2"];
  $a3 = $_POST["q3"];
  $a4 = $_POST["q4"];
  $a5 = $_POST["q5"];


  echo "Q1: " . $a1 . "<br>";

  echo "Q2: " . $a2 . "<br>";
}

echo grade();
?>
