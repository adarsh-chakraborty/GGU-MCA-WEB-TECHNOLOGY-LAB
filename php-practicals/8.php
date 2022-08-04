 
<?php
// start session and store username and password in session
session_start();

if(isset($_POST['text']) && isset($_POST['key'])){
  $_SESSION[$_POST['key']] = $_POST['text'];

  echo "<strong>Session Saved</strong>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store text in session</title>
</head>
<body>
  <?php

  # print all values stored in session
  echo "<h2>Session Values</h2>";
  echo "<ul>";
  foreach ($_SESSION as $key => $value) {
    echo "<li>$key: $value</li>";
  }
  echo "</ul>";

  ?>
  <form action="/php-practicals/8.php" method="post">
    <input type="text" name="key" placeholder="key" required>
    <input type="text" name="text" placeholder="Some text" required>
    <button type="submit">Submit</button>
  </form>
</body>
</html>