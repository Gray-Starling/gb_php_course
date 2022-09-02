<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';
$pdo = require './db.php';

session_start();

$userProvider = new UserProvider($pdo);

$username = null;

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getLogin();
}


require_once './view/index.php';
