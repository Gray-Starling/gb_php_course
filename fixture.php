<?php

include './model/User.php';
include './model/UserProvider.php';
include './model/Task.php';
include './model/TaskProvider.php';

$pdo = new PDO('sqlite:database.db');

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  login VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  description VARCHAR(150),
  isDone BOOlEAN 
)');
