<?php
/* echo "conn.php running now!\n;*/
$serverName = "localhost";
$userName = "phpmyadmin";
$password = "qwerty";
$databaseName = "feedback";
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 ?>
