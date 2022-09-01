<?php
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
require_once 'model/User.php';

session_start();

$taskProvider = new TaskProvider();
$tasks = $taskProvider->getTasksList();
$username = null;

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getUsername();
}

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
