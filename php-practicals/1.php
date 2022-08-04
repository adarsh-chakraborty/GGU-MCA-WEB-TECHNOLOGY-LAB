<?php

if(isset($_POST)) {
   $value1 = $_POST['value1'];
   $value2 = $_POST['value2'];

   // CHeck value1 and value2 is number then add them else concat them.
    if(is_numeric($value1) && is_numeric($value2)) {
        $result = $value1 + $value2;
    } else {
        $result = $value1 . $value2;
    }

    echo $result;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact or SUM</title>
</head>
<body>
  <form action="/php-practicals/1.php" method="post">

  <label>Enter first value:<input type="text" id="value1" placeholder="Some value" name="value1" required></label>
  <label>Enter second value:<input type="text" id="value2" placeholder="Some value" name="value2" required></label>
  <button type="submit">Submit</button>
  </form>
</body>
</html>