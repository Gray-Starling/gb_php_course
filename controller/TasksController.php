<?php
include 'model/Task.php';
include 'model/TaskProvider.php';
include 'model/User.php';


$pdo = require 'db.php';

session_start();

$taskProvider = new TaskProvider($pdo);

$username = null;

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getLogin();
}


if (isset($_GET['action']) && $_GET['action'] === 'add') {
  $taskDescription = htmlspecialchars(strip_tags($_POST["task"]));
  var_dump($taskDescription);

  $task = new Task($taskDescription);

  $taskProvider = new TaskProvider($pdo);
  $taskProvider->addTask($task);
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
