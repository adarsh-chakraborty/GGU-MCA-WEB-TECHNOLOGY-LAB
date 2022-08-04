<?php
if (isset($_POST['adarsh'])) {
  $checkboxValues = $_POST['adarsh'];

  echo "<hr/>";

  echo "<ul>";
  foreach($checkboxValues as $checkboxValue){
    echo "<li>$checkboxValue</li>";
  }
  echo "</ul>";
  echo "<hr/>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkboxes array</title>
  <style>
    .checkboxes {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
  </style>
</head>
<body>
  <form action="/php-practicals/2.php" method="post">
  
  <div class="checkboxes">
  <label><input type="checkbox" name="adarsh[]" value="Fix Bugs">Fix Bugs</label>
  <label><input type="checkbox" name="adarsh[]" value="Create a new brach">Create a new brach</label>
  <label><input type="checkbox" name="adarsh[]" value="Commit new changes to code">Commit new changes to code</label>
  <label><input type="checkbox" name="adarsh[]" value="Push latest changes to github">Push latest changes to github</label>
  <label><input type="checkbox" name="adarsh[]" value="Pay Electricity Bill">Pay Electricity Bill</label>
  <label><input type="checkbox" name="adarsh[]" value="Pay Broadband Bill">Pay Broadband Bill</label>
  <label><input type="checkbox" name="adarsh[]" value="Add More Bugs to Fix later">Add More Bugs to Fix later</label>
  <button type="submit">Submit</button>
  </div>
  </form>
</body>
</html>