<?php

function grade() {
  $a1 = $_POST["a1"];
  $a2 = $_POST["a2"];
  $a3 = $_POST["a3"];
  $a4 = $_POST["a4"];
  $a5 = $_POST["a5"];

  echo "<b>Question 1: Approximately, what is the population of planet Earth?</b>";
  echo "<br> You answered: " . $a1 . "<br>" . "Correct answer: 7.5 Billion";

  echo "<br><br> <b>Question 2: Which of these is not one of the Seven Wonders of 2019?</b>";
  echo "<br> You answered: " . $a2 . "<br>" . "Correct answer: The Great Pyramid of Giza";

  echo "<br><br><b> Question 3: Which of the colors is in the middle of the seven colors of a rainbow?</b>";
  echo "<br> You answered: " . $a3 . "<br>" . "Correct answer: Green";

  echo "<br><br><b> Question 4: How many continents are there?</b>";
  echo "<br> You answered: " . $a4 . "<br>" . "Correct answer: 7";

  echo "<br><br> <b>Question 5: Which animal is the mascot of World Wildlife Fund (WWF)?</b>";
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

  echo  "<br><br> <b>Total Score: " . $points . "/5</b>";
  echo  "<br><br> <b>Score: " . ($points/5)*100 . "%</b>";
}

echo grade();
?>
