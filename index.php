<!DOCTYPE html>
<html>
 <body>


  <h1> Feedback System </h1>

  <form action="submit.php" method="post">
  <p> Are you satisfied with our products? 1 means extremely dissatisfied, 5 means extremely satisfied. <br>
	<label><input type="radio" name="arg1" value="1" required> 1</label>
    <label><input type="radio" name="arg1" value="2" required> 2</label>
	<label><input type="radio" name="arg1" value="3" required> 3</label>
    <label><input type="radio" name="arg1" value="4" required> 4</label>
	<label><input type="radio" name="arg1" value="5" required> 5</label>

  <p>Do you find our products easy to use? <br>
	<label><input type="radio" name="arg2" value="1" required> 1</label>
    <label><input type="radio" name="arg2" value="2" required> 2</label>
	<label><input type="radio" name="arg2" value="3" required> 3</label>
    <label><input type="radio" name="arg2" value="4" required> 4</label>
	<label><input type="radio" name="arg2" value="5" required> 5</label>

  <p>How much impact our products have made on your daily routine? <br>
	<label><input type="radio" name="arg3" value="1" required> 1</label>
    <label><input type="radio" name="arg3" value="2" required> 2</label>
	<label><input type="radio" name="arg3" value="3" required> 3</label>
    <label><input type="radio" name="arg3" value="4" required> 4</label>
	<label><input type="radio" name="arg3" value="5" required> 5</label>
  <p>Would you recommend our products to your friends and family? <br>

    <label><input type="radio" name="arg4" value="1" required> 1</label>
    <label><input type="radio" name="arg4" value="2" required> 2</label>
	<label><input type="radio" name="arg4" value="3" required> 3</label>
    <label><input type="radio" name="arg4" value="4" required> 4</label>
	<label><input type="radio" name="arg4" value="5" required> 5</label>

	<br>
    <p>Any other feedback<br>
    <textarea name="feed" type="text" rows = "5" cols="50"></textarea>


	<br>
    <button type="submit" name="submit" value="submit">Submit Feedback</button>
  </form>

  <?php
  /*if (isset($_POST['submit']))
  {
    echo "conn.php running now!\n";
    $serverName = "localhost";
    $userName = "phpmyadmin";
    $password = "qwerty";
    $databaseName = "feedback";
    $connect = mysqli_connect($serverName, $userName, $password, $databaseName);

    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $response1 = $_POST['arg1'];
    $response2 = $_POST['arg2'];
    $response3 = $_POST['arg3'];
    $response4 = $_POST['arg4'];
    $feedback_text = $_POST['feed'];

    $sql = "INSERT INTO responses (response1, response2, response3, response4,
    feedback_text) VALUES ( '$response1', '$response2', '$response3', '$response4', '$feedback_text');";
  //    $sql = "INSERT INTO responses ( response1, response2, response3, response4,
  //      feedback_text) VALUES ( '7', '6', '5', '4', 'wefewfewfw');";
    mysqli_query($connect, $sql);

  }
*/
  ?>

  </body>
</html>
