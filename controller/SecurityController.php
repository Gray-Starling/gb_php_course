<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();

$error = null;

if (isset($_POST['username'], $_POST['password'])) {
  $username = htmlspecialchars(strip_tags($_POST["username"]));
  $password = htmlspecialchars(strip_tags($_POST["password"]));

  // ['username' => $username, 'password' => $password] = $_POST;
  $userProvider = new UserProvider();
  $user = $userProvider->getByUsernameAndPassword($username, $password);
  if ($user === null) {
    $error = 'Пользователь с указанными учетными данными не найден';
  } else {
    $_SESSION['username'] = $user;
    header("Location: index.php");
    die();
  }
}


// $name = null;
// if (isset($_POST["username"]) && isset($_POST["password"])) {
//   $login = htmlspecialchars(strip_tags($_POST["username"]));
//   $pass = htmlspecialchars(strip_tags($_POST["password"]));

//   if ($login === "admin" && $pass === "123") {
//     $_SESSION["user"]["username"] = $login;
//     $name = $login;
//     header("Location: index.php");
//     die();
//   } else {
//     echo "<script type='text/javascript'>alert('Не верные данные');</script>";
//   }
// }


include_once "./view/signin.php";
