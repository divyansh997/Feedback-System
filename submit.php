<?php

  include_once 'conn.php';
    /*echo "conn.php running now!\n";
    $serverName = "localhost";
    $userName = "root";
    $password = "qwerty";
    $databaseName = "feedback";
    $connect = mysqli_connect($serverName, $userName, $password, $databaseName);

    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

*/
  $response1 = $_POST['arg1'];
  $response2 = $_POST['arg2'];
  $response3 = $_POST['arg3'];
  $response4 = $_POST['arg4'];
  $feedback_text = $_POST['feed'];
  echo "AA";
  $sql = "INSERT INTO responses (response1, response2, response3, response4,
  feedback_text) VALUES ( '$response1', '$response2', '$response3', '$response4', '$feedback_text');";
  //  $sql = "INSERT INTO responses ( response1, response2, response3, response4,
  //    feedback_text) VALUES ( '11', '111', '1', '2', 'sdfdsfrewsdf');";
  mysqli_query($connect, $sql);

header("Location: /index.php?submit=success");
?>
