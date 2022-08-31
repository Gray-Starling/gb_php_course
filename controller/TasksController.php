<?php
include_once './model/TaskProvider.php';
include_once './model/Task.php';

session_start();

$taskProvider = new TaskProvider();
$tasks = $taskProvider->getTasksList();

if (isset($_GET["action"]) && $_GET["action"] === "add") {
  $taskDescription = htmlspecialchars(strip_tags($_POST["taskName"]));
  $taskProvider->setTasksList(new Task($taskDescription));
  header("Location: /?controller=tasks");
  die();
}

if (isset($_GET["action"]) && $_GET["action"] === "del") {
  $key = $_GET["key"];
  $taskProvider->delTasksList($key);
  header("Location: /?controller=tasks");
  die();
}

$undoneList = $taskProvider->getUndoneList();

require_once './view/todoList.php';
