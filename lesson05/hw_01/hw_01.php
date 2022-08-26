<?php

require_once 'User.php';
require_once 'Task.php';

$user = new User("Gray", "mail@mail.ru");
$task1 =  new Task($user, "Новая задача");
