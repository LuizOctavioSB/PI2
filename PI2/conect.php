<?php
$mysqli = new mysqli("localhost", "root", "");

echo "Info 1: " . $mysqli->host_info . "<br>";

$mysqli = new mysqli("127.0.0.1", "root", "", "", 3306);

echo "Info 2: " . $mysqli->host_info . "<br>";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$result = $mysqli->query("show databases;");

var_dump($result);

foreach ($result as $row) {
  echo $row['Database'] . "<br>";
}
?>