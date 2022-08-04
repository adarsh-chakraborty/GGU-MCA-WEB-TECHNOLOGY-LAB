<?php
// create an empty array.
session_start();


// Check if names is not set in session object
if (!isset($_SESSION['names'])) {
  // if not set, set it to an empty array
  $_SESSION['names'] = [];
}



if (isset($_POST['chk1'])) {
  $checkboxValues = $_POST['chk1'];
  echo "<h2>Selected Names: </h2>";
  echo "<ul>";
  foreach($checkboxValues as $checkboxValue){
    echo "<li>$checkboxValue</li>";
  }
  echo "</ul>";
}



if(isset($_POST['newname'])){
  // add the new name to the array.

  // check if the name is already in the array.
  if(in_array($_POST['newname'], $_SESSION['names'])){
    echo "<h2 class='red'>Name already exists</h2>";
  } else {
    // add the name to the array.
    array_push($_SESSION['names'], $_POST['newname']);
    echo "<h2>Name added</h2>";
  }
}

// check if names contains any item.
if(count($_SESSION['names']) > 0){
  // loop through the names array.
  echo "<hr/>";
  echo "<form action='/php-practicals/3.php' method='post'>";
  echo "<div class='listnames'>";
  foreach($_SESSION['names'] as $name){
    // display the name.
    echo "<label><input type='checkbox' name='chk1[]' value='$name'>$name</label>";
  }
  echo '<button type="submit" name="submitcheck">Submit</button>';
  echo "</div>";
  echo "</form>";
  echo "<hr/>";

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Name</title>
  <style>
    .red{
      color: red;
    }
    .listnames{
      display: flex;
      flex-direction: column;
      gap: 0.2rem;
      margin: 2rem 1rem 2rem 1rem;

    }
    button{
      max-width: min-content;
      margin-top: 1rem;
    }
  </style>
</head>
<body>
  <form action="/php-practicals/3.php" method="post">
    <input type="text" placeholder="Enter name" name="newname" required>
    <button type="submit">Submit</button>
  </form>
</body>
</html> 
