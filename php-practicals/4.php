<?php 
      
     
    if(isset($_POST["cities"]))  
    { 
      echo "Selected Cities:";
      echo "<ul>";
      // Retrieving each selected option 
      foreach ($_POST['cities'] as $city)  
      echo "<li>$city</li>"; 
    } 
    echo "</ul>";
    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkboxes array</title>
  <style>
    select {
      height: 15rem;
      width: 100%;
    }
  </style>
</head>
<body>
  <form action="/php-practicals/4.php" method="post">
  

  <label for="cities" >Select cities</label>
  <select id="cities" name="cities[]" multiple>
  <option>Bilaspur</option>
  <option>Raipur</option>
  <option>Durg</option>
  <option>Raigarh</option>
  <option>Kolkata</option>
  <option>Delhi</option>
  <option>Nagpur</option>
  <option>Mumbai</option>
  <option>Kerela</option>
  <option>Banglore</option>
  </select>
  <button type="submit">Submit</button>
  </div>
  </form>
</body>
</html>