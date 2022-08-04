<?php
// get search and new item from post request.


// search for $search in $items array.
$items = array('Apple', 'Banana', 'Orange', 'Pear', 'Grape');

if(isset($_POST['search'])){
  $search = $_POST['search'];
  $newItem = $_POST['newitem'];

  $key = array_search($search, $items);
  if($key !== false){
    // Why not just replace the item???
    $items[$key] = $newItem;
    // deleting
    // unset($items[$key]);
    // $items = array_values($items); // reindexing
    
    echo "<strong>Item found!</strong>";
  } else {
    echo "<strong>Item not found!</strong>";
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
  <h2>Search and Delete item from array</h2>
  <?php
  echo "Items in the array:";
  # print items in a list
  echo '<ul>';
  foreach ($items as $item) {
    echo '<li>' . $item . '</li>';
  }
  echo '</ul>';
  ?>
  <form action="/php-practicals/7.php" method="post">
    <input type="text" name="search" placeholder="Search" required>
    <p>Another Item to add in the array if found</p>
    <input type="text" name="newitem" placeholder="New Item" required>
    <input type="submit" name="submit" value="Search">
  </form>
</body>
</html>