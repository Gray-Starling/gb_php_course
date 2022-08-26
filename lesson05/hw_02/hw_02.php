<?php

require_once 'User.php';
require_once 'Task.php';
require_once  'Comment.php';
require_once 'TaskService.php';

$user1 = new User("Gray", "mail@mail.ru");
$task1 =  new Task($user1, "Новая задача");

TaskService::addComment($user1, $task1, "Комментарий");
TaskService::addComment($user1, $task1, "Комментарий2");

$comments2 = $task1->getComments();


echo $user1->getUsername() . PHP_EOL;
echo $task1->getDescription() . PHP_EOL;
$arr = $task1->getComments();

echo ($arr[0]->getText()) . PHP_EOL;
echo ($arr[1]->getText());
