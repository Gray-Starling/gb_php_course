<?php

do {
  $userInput  = (int)readline("Укажите число: ");
  if ($userInput <= 0) {
    echo "\n\033[01;31mУкажите положительное число!\n\033[0m";
  }
} while ($userInput <= 0);

$fingerNumber = $userInput % 8;
$fingerName = "";

switch ($fingerNumber) {
  case 1:
    $fingerName = "большому";
    break;
  case 2:
  case 0:
    $fingerName = "указательному";
    break;
  case 3:
  case 7:
    $fingerName = "среднему";
    break;
  case 4:
  case 6:
    $fingerName = "безымянному";
    break;
  case 5:
    $fingerName = "мезинцу";
    break;
}

if ($fingerName === "мезинцу") {
  echo "\nЧисло {$userInput} соответствует {$fingerName}\n";
} else {
  echo "\nЧисло {$userInput} соответствует {$fingerName} пальцу\n";
}
