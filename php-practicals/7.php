<?php
// start session
session_start();
// get search and new item from post request.


// search for $search in $items array.

// get items from session or initialize empty array.
$items = isset($_SESSION['items']) ? $_SESSION['items'] : array('Apple', 'Banana', 'Orange', 'Pear', 'Grape');


if(isset($_POST['finddel'])){
  $search = $_POST['finddel'];

  $key = array_search($search, $items);
  if($key !== false){
    
    // delete item from array.
    unset($items[$key]);
    // save the array back to session.
    $_SESSION['items'] = $items;
  
    
    echo "<strong>* Item was found and deleted.</strong>";
  } else {
    echo "<strong>Item not found in array!</strong>";
  }
}

if(isset($_POST['newitem']) && isset($_POST['search'])){
  $search = $_POST['search'];
  $newItem = $_POST['newitem'];

  $key = array_search($search, $items);
  if($key !== false){
    
    // put new item after the key.
    array_splice($items, $key + 1, 0, $newItem); 
    $_SESSION['items'] = $items;

    
    echo "<strong>* Item found! New item added next to it.</strong>";
  } else {
    echo "<strong>Item not found in array!</strong>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo "<h2>Items in the array:</h2>";
  # print items in a list
  echo '<ul>';
  foreach ($items as $item) {
    echo '<li>' . $item . '</li>';
  }
  echo '</ul>';
  ?>
  <h2>Find and Delete item from array</h2>
  <form action="/php-practicals/7.php" method="post">
    <input type="text" name="finddel" placeholder="Search" required>
    
    <input type="submit" name="submit" value="Search">
  </form>
  
  <h2>Find and Insert new item next to the array.</h2>
  <form action="/php-practicals/7.php" method="post">
    <input type="text" name="search" placeholder="Search" required>
    <input type="text" name="newitem" placeholder="New Item" required>
    <input type="submit" name="submit" value="Search">
  </form>
  </body>
</html>