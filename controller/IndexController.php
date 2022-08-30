<?php
require_once 'model/User.php';
session_start();

$username = null;
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getUsername();
}

require_once './view/index.php';
