<?php

function grade() {
  $a1 = $_POST["a1"];
  $a2 = $_POST["a2"];
  $a3 = $_POST["a3"];
  $a4 = $_POST["a4"];
  $a5 = $_POST["a5"];

  echo "Question 1: Approximately, what is the population of planet Earth?";
  echo "<br> You answered: " . $a1 . "<br>" . "Correct answer: 7.5 Billion";

  echo "<br><br> Question 2: Approximately, what is the population of planet Earth?";
  echo "<br> You answered: " . $a2 . "<br>" . "Correct answer: The Great Pyramid of Giza";

  echo "<br><br> Question 3: Approximately, what is the population of planet Earth?";
  echo "<br> You answered: " . $a3 . "<br>" . "Correct answer: Green";

  echo "<br><br> Question 4: Approximately, what is the population of planet Earth?";
  echo "<br> You answered: " . $a4 . "<br>" . "Correct answer: 7";

  echo "<br><br> Question 5: Approximately, what is the population of planet Earth?";
  echo "<br> You answered: " . $a5 . "<br>" . "Correct answer: Panda";

  $points = 0;

  if ($a1 == "7.5 Billion")
  {
    $points++;
  }
  if ($a2 == "The Great Pyramid of Giza")
  {
    $points++;
  }
  if ($a3 == "Green")
  {
    $points++;
  }
  if ($a4 == "7")
  {
    $points++;
  }
  if ($a5 == "Panda")
  {
    $points++;
  }

  echo  "<br><br> <b>Score in percent: " . ($points/5)*100 . "</b>";
}

echo grade();
?>
