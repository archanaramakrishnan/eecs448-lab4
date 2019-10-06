<?php

function grade() {
  $a1 = $_POST["q1"];
  $a2 = $_POST["q2"];
  $a3 = $_POST["q3"];
  $a4 = $_POST["q4"];
  $a5 = $_POST["q5"];



  echo "Q1: " . $a1 . "<br>";
  echo "Q2: " . $a2 . "<br>";

  $points = 0;

  echo "Question 1: What was the capital of Spain?.<br>";
  if ($a1 == "7.5")
  {
    $points++;
  }
  if ($a2 == "giza")
  {
    $points++;
  }
  if ($a3 == "green")
  {
    $points++;
  }
  if ($a4 == "7")
  {
    $points++;
  }
  if ($a5 == "panda")
  {
    $points++;
  }

  echo $points;
}

echo grade();
?>
