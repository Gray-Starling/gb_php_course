<?php

$students = [
  'ИТ20' => [
    'Иванов Иван' => 5,
    'Кириллов Кирилл' => 3,
    'Вадимов Вадим' => 2,
    'Антонов Антон' => 3,
    'Скворцов Сергей' => 5,
    'Смирнова Христина' => 5,
    'Рогозин Даниил' => 4,
    'Золин Владилен' => 4,
    'Архаткина Владислава' => 3,
    'Мещерякова Мария' => 4,
    'Саврасова Фаина' => 2,
    'Хромченко Зинаида' => 3,
    'Протасова Майя' => 2,
  ],
  'БАП20' => [
    'Антонов Антон' => 4,
    'Сергеев Сергей' => 5,
    'Александров Александр' => 5,
    'Петров Петр' => 3,
    'Ябров Тимур' => 2,
    'Белорусов Ефрем' => 3,
    'Ягода Назар' => 4,
    'Ярилова Розалия' => 4,
    'Нырко Платон' => 4,
    'Калинин Агап' => 5,
    'Никифоров Юлиан' => 3,
  ]
];
$gradesSum = 0;
$maxAverage = null;
$groupWithMaxAverage = null;

foreach ($students as $group => $student) {
  foreach ($student as $name => $grade) {
    $gradesSum += $grade;
    if ($grade < 3) {
      $deductibleUser[] = $name;
    }
  }
  $average = $gradesSum / count($student);
  $averageByGroups[$group] = $average;
  $deductibleList[$group] = $deductibleUser;
  $deductibleUser = [];
  $gradesSum = 0;
}

foreach ($averageByGroups as $key => $value) {
  if ($value > $maxAverage) {
    $maxAverage = $value;
    $groupWithMaxAverage = $key;
  }
}

echo "Группа {$groupWithMaxAverage} иммеет наивысшее среднее значение успеваемости\n";
print_r($deductibleList);
