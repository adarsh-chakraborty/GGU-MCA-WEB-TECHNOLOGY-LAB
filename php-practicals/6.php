<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SORT ASORT KSORT</title>
</head>
<body>
<?php

echo "<h2>Sort, ASORT, KSORT Functions</h2>";
echo "<h3>Sort()</h3>";

echo "<p>An Array to be sorted</p>";
$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes");
echo "<pre>";
print_r($cars);
echo "</pre>";

echo "Sorted Array:<br>";
sort($cars);
echo "<pre>";
print_r($cars);
echo "</pre>";

echo "<p>Same with array of integers</p>";
$numbers = array(4, 6, 2, 22, 11);
echo "<pre>";
print_r($numbers);
echo "</pre>";

// sort numbers
sort($numbers);
echo "<p>Sorted Array</p>";
echo "<pre>";
print_r($numbers);
echo "</pre>";
echo "<hr/>";

echo "<h3>ASORT()</h3>";
echo "<p>Associative Array to be sorted by value</p>";
$people = array("Peter" => 24, "Joe" => 44, "Glenn" => 21, "Cleveland" => 33, "Michael" => 41);
echo "<pre>";
print_r($people);
echo "</pre>";

// sort people
asort($people);
echo "<p>Sorted Array</p>";
echo "<pre>";
print_r($people);
echo "</pre>";
echo "<hr/>";


echo "<h3>KSORT()</h3>";
echo "<p>Associative Array to be sorted by key</p>";
$people = array("Adarsh" => 24, "Raj" => 44, "Rajesh" => 21, "Rajeshwari" => 33, "Rajeshwary" => 41,"A Dog" => 11);
echo "<pre>";
print_r($people);
echo "</pre>";

// sort people
ksort($people);
echo "<p>Sorted Array</p>";
echo "<pre>";
print_r($people);
echo "</pre>";
echo "<hr/>";



?>
</body>
</html>


