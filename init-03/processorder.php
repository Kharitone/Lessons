<?php
  
  // ALEX, PLEASE ADD COMMENT HERE 
  $tires=$_POST["tireqty"];
  $oil=$_POST["oilqty"];
  $sparks=$_POST["sparkqty"];
  $address=$_POST["address"];

  // CALCULATE TOTAL USING $var1 + $var2 +...
  //$total = ;      // uncomment after    <<<<<<<

  $nl = "</br>";    // new line in a variable now, useful later
?>

<html>
<head>
  <title>
    GARAGE-TOP
  </title>
  <style>
    body { background-color: #f7f7f5; }     // ADD IT TO THE order.css AS WELL
  </style>

  <link rel="stylesheet" href="order.css">
</head>

<body>
  <h1>Garage-Top</h1>
  </hr>
  <h3>Order Results</h3>
  
  <?php

    echo "<div id='qty'>";

    echo "Tires: $_POST[tireqty]".$nl;
    echo "Oil: $oil".$nl;
    echo "Sparks: $sparks".$nl;
    
    echo "</div>".$nl;

    echo "Will be shipped to:</br>    \"$address\"".$nl;      // LET's MAKE THIS LINE TO BELONG TO THE CSS CLASS 'qty' 
    echo "<p>Order received: ".date('H:i, jS F Y')."</p>";    // AS WELL
  ?>

  </body>
</html>
