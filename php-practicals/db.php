<html>
<head></head>
<h2>PHP DATABASE CREATION</h2><br><br>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
CREATE DATABASE <input type = "radio" name ="dbcr" value ="cdb"><br><br>
USE DATABASE <input type ="radio" name ="dbcr" value ="udb"><br><br>
DATABASE NAME <input type = "text" name ="dbn" ><br><br>
 <input type = "submit" name ="submit" value ="SUBMIT">
 </form>
 <?php
 $dbname=$_POST["dbn"];
 $rdval=$_POST["dbcr"];
 if($rdval == "udb")
 {

 try
 {
 $conn=new PDO("mysql:host=localhost;dbname=$dbname","root","");
 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 echo "database is active";

 }
 catch(PDOException $e)
 {
 echo "error in connecting".$e->getMessage();
 }

 }
 else if($rdval == "cdb")
 {
 try
 {
 $conn=new PDO("mysql:host:localhost","root","");
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "CREATE DATABASE $dbname";
 $conn->exec($sql);
 echo "Database created successfully<br>";
 }
 catch(PDOException $e)
 {
 echo $sql . "<br>" . $e->getMessage();
 }
 }

 ?>

 </body>
 </html>