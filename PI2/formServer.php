<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

if ($_SESSION['count'] == 5) {
  unset($_SESSION['count']);
  echo "Desregistrando a variável";
} else {
  echo $_SESSION['count'];
}

?>