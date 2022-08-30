<?php

$name = null;
if (isset($_SESSION["username"])) {
  $name = $_SESSION["username"];
}

if (isset($_GET["action"]) && $_GET["action"] === "login") {
  header("Location: /?controller=security");
  die();
}

if (isset($_GET["action"]) && $_GET["action"] === "logout") {
  unset($_SESSION["login"]);
  $name =  null;
  session_destroy();
  header("Location: index.php");
  die();
}


require_once "./view/header.php";
