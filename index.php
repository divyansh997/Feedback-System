<!DOCTYPE html>

<html>
<head>
    <style>
        body {
             font-size: 150%;
         }
         button {
             font-size: 100%;
         }
        </style>
</head>

 <body>


  <h1> Feedback System </h1>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <p> Please provide your feedback below. 1 means extremely dissatisfied,
       5 means extremely satisfied. <br>

  <form action="submit.php" method="post">
  <p> Are you satisfied with our products?<br>
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
    <textarea name="feed" type="text" rows = "5" cols="50" maxlength="500"></textarea>


	<br>
    <button type="submit" name="submit" value="submit">Submit Feedback</button>
  </form>

  </body>
</html>
