<?php

$userName = readline("Как вас зовут? ");

$userDailyTask1 = readline("Какая задача стоит перед вами сегодня? ");
$userDailyTask1_time = (int)readline("Сколько примерно времени эта задача займет? ");

$userDailyTask2 = readline("Добавте еще задачу на сегодня: ");
$userDailyTask2_time = (int)readline("Сколько примерно времени эта задача займет? ");

$userDailyTask3 = readline("И еще одну задачу на день: ");
$userDailyTask3_time = (int)readline("Сколько примерно времени эта задача займет? ");

$totalTimeRequired = $userDailyTask1_time + $userDailyTask2_time + $userDailyTask3_time;

echo "
{$userName}, сегодня у вас запланировано 3 приоритетных задачи на день:
- {$userDailyTask1} ({$userDailyTask1_time} ч)
- {$userDailyTask2} ({$userDailyTask2_time} ч)
- {$userDailyTask3} ({$userDailyTask3_time} ч)
Примерное время выполнения плана = {$totalTimeRequired} ч
";
