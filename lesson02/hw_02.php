<?php

$userName  = readline("Как вас зовут? ");
$taskCount = (int)readline("Сколько задач на сегодня? ");
$totalTimeRequired = 0;
$outPut = "{$userName}, сегодня у вас запланировано {$taskCount} задачи на день:";

for ($i = 0; $i < $taskCount; $i++) {
  $userDailyTask = readline("Какая задача стоит перед вами сегодня? ");
  $userDailyTask_time = (int)readline("Сколько примерно времени эта задача займет? ");
  $totalTimeRequired  += $userDailyTask_time;
  $outPut = "{$outPut}
  - {$userDailyTask} ({$userDailyTask_time}ч)";
}

echo "
===
{$outPut}
Примерное время выполнения плана = {$totalTimeRequired}ч
===
";
