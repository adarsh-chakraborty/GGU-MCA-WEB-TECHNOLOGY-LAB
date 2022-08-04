<?php

// List here whichever superglobals you want to print
// This could be your own custom superglobals
$globals = array(
    '$_SERVER' => $_SERVER, '$_ENV' => $_ENV,
    '$_REQUEST' => $_REQUEST, '$_GET' => $_GET,
    '$_POST' => $_POST, '$_COOKIE' => $_COOKIE,
    '$_FILES' => $_FILES 
);
?>
<html>
    <style>
        <?php // Adjust CSS formatting for your output  ?>
        .left {
            font-weight: 700;
        }
        .right {
            font-weight: 700;
            color: #009;
        }
        .key {
            color: #d00;
            font-style: italic;
        }
    </style>
    <body>
        <?php
        // Generate the output
        echo '<h1>Superglobals</h1>';
        foreach ($globals as $globalkey => $global) {
            echo '<h3>' . $globalkey . '</h3>';
            foreach ($global as $key => $value) {
                echo '<span class="left">' . $globalkey . '[<span class="key">\'' . $key . '\'</span>]</span> = <span class="right">' . $value . '</span><br />';
            }
        }
        ?>
    </body>
</html>



<!-- OLD BACKUP -->
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
 -->

 <?php
/*
  ########## GLOBALS ############# 
  echo "<hr/>";
  echo "<h2>\$GLOBALS</h2>";
  print_r($GLOBALS);
  echo "<hr/>";
  ###############################

    ########## SERVER ############# 
    echo "<hr/>";
    echo "<h2>SERVER</h2>";
    print_r($_SERVER);

    echo "<hr/>";
    ###############################

      ########## GET ############# 
  echo "<hr/>";
  echo "<h2>GET</h2>";
  print_r($_GET);
  echo "<hr/>";
  ###############################

    ########## POST ############# 
    echo "<hr/>";
    echo "<h2>POST</h2>";
    print_r($_POST);

    echo "<hr/>";
    ###############################

      ########## FILES ############# 
  echo "<hr/>";
  echo "<h2>FILES</h2>";
  print_r($_FILES);
  echo "<hr/>";
  ###############################

    ########## COOKIE ############# 
    echo "<hr/>";
    echo "<h2>COOKIE</h2>";
    print_r($_COOKIE);
    echo "<hr/>";
    ###############################

      ########## SESSION ############# 
  echo "<hr/>";
  echo "<h2>SESSION</h2>";
  print_r($_SESSION);
  echo "<hr/>";
  ###############################

    ########## REQUEST ############# 
    echo "<hr/>";
    echo "<h2>REQUEST</h2>";
    echo $_REQUEST;
    echo "<hr/>";
    ###############################

      ########## ENV ############# 
  echo "<hr/>";
  echo "<h2>ENV</h2>";
  print_r($_ENV);
  echo "<hr/>";
  ###############################



  */?>