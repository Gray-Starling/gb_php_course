<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';
$pdo = require './db.php';

session_start();

$pdo = new PDO('sqlite:database.db');
$userProvider  =  new UserProvider($pdo);
$username = null;
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getLogin();
}

if (isset($_GET["action"]) && $_GET["action"] === "registration") {
  $newUserLogin = htmlspecialchars(strip_tags($_POST["login"]));
  $newUserName = htmlspecialchars(strip_tags($_POST["username"]));
  $newUserPass = htmlspecialchars(strip_tags($_POST["password"]));
  $user = new User($newUserLogin);

  $userProvider->registerUser($user, $newUserPass);
  header("Location: /");
  die();
}


include './view/register.php';
