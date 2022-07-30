<?php

$quastion = "В каком году началась история PHP?";

$answer_var1 = 1984;
$answer_var2 = 1994;
$answer_var3 = 1996;

$questionTemplate = "
{$quastion}
 - {$answer_var1} год
 - {$answer_var2} год
 - {$answer_var3} год
";

do {
  echo $questionTemplate;
  $answer = (int)readline("Ваш ответ: ");
  if ($answer == $answer_var1 || $answer == $answer_var3) {
    echo "Ответ не верный";
    break;
  } elseif ($answer === $answer_var2) {
    echo "Поздравляю! Вы ответили верно.";
    break;
  }
} while (true);
