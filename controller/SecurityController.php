<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';
$pdo = require './db.php';

session_start();

$error = null;
$username = null;

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getLogin();
}

if (isset($_POST['username'], $_POST['password'])) {
  $username = htmlspecialchars(strip_tags($_POST["username"]));
  $password = htmlspecialchars(strip_tags($_POST["password"]));
  $userProvider = new UserProvider($pdo);
  $user = $userProvider->getByUsernameAndPassword($username, $password);
  if ($user === null) {
    $error = 'Пользователь с указанными учетными данными не найден';
  } else {
    $_SESSION['username'] = $user;
    header("Location: index.php");
    die();
  }
}

if (isset($_GET["action"]) && $_GET["action"] === "logout") {
  unset($_SESSION["username"]);
  $username =  null;
  session_destroy();
  header("Location: index.php");
  die();
}

include_once "./view/signin.php";
