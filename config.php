<?php

//for procedural
$databaseHost = 'localhost';
$databaseName = 'toDo_DB';
$databaseUsername = 'root';
$databasePassword = 'root';


//create connection
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//check connection
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully <br>";

 ?>
