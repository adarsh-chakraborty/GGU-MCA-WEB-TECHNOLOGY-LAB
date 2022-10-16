<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    input[type="text"]{
      border: 1px solid black;
      width: 200px;
      height: 30px;
      margin: 10px;
      border-radius: 1px;
      transition: all 0.3s ease-in-out;
    }

    input[type="text"]:focus {
      border: 1px solid blue;
      
    }
    .error {
      color: red;
      background-color: #FFCCCB;
    }

    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-top: 50px;
    }
    </style>
</head>
<body>
  <div class="container">

    <form accept="/emp.php" method="post">
      <label>
        Enter employee ID: 
        <input type="text" name="emp_id" id="empid" pattern="\d{6}" title="Employee code should be atleast 6 digits." required> 
      </label>
      <button>submit employee code</button>
    </form>
  </div>

</body>
</html>

<?php
$conn = null;
if(isset($_POST["emp_id"])){
  $emp_id = $_POST["emp_id"];


  try{
    // Connect to database 

   $conn=new PDO("mysql:host=localhost;dbname=lab","root","");
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch Employee Code

    $stmt = $conn->prepare("SELECT * FROM Employee WHERE emp_id = $emp_id"); 
    $stmt->execute();	
	//fetch all records into an associative array    
	  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    if($stmt -> rowCount() == 0){
      echo "<script>
      const inp = document.getElementById('empid');
      inp.classList.add('error');
      inp.value = $emp_id;

      inp.addEventListener('focus', () => {
        if(inp.classList.contains('error')){
          inp.classList.remove('error');
          inp.value = '';
        }
      });
      alert('Invalid employee code');
      </script>";
      die;
    }


	 // Employee ID OK
   // Fetch the Projects and Show in combo box
   
    $stmt = $conn->prepare("SELECT * FROM Project"); 
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $projects = $stmt-> fetchAll();
    echo "<div class='container'>";
    echo "<form action='/emp.php' method='post'>";
    echo "<label>Select Project: <select name='project[]' id='sp' multiple>";
    echo "<option value='' disabled >Select Project</option>";
    foreach($projects as $project){
      echo "<option value='".$project["project_id"]."'>".$project["project_name"]."</option>";
    }
    echo "</select></label>";
    echo "<input type='hidden' name='emp_id' value='$emp_id'>";
    echo "<button disabled id='spbtn'>submit projects</button>";
    echo "</form>";
    echo "</div>";

    echo "<script>
    const sp = document.getElementById('sp');

    
      console.log('sp');
      const btn = document.getElementById('spbtn');
      sp.addEventListener('change', () => {
        btn.disabled = false;
      });
    </script>";


    if(isset($_POST["project"])){
      $projects = $_POST["project"];
      $emp_id = $_POST["emp_id"];
      $sql = "INSERT INTO EmployeeProjects (emp_id, project_id) VALUES ";
      foreach($projects as $project){
        $sql .= "($emp_id, $project),";
      }
      $sql = rtrim($sql, ",");
      echo $sql;
      $stmt = $conn->prepare($sql); 
      $stmt->execute();
      echo "<script>alert('Projects added successfully')</script>";
    }



  }catch (PDOException $e){
    echo $e -> getMessage();
  }

}
?>
