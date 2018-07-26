<?php
include("config.php");

//the difference between include and include once

//getting id form URL
$id = $_GET['id'];

//deleting the row from the table
$result = mysqli_query($mysqli, "DELETE FROM tasks WHERE id=$id");

///// "update from users SET 'status=$status' WHERE id= $id"

header("Location:index.php");

?>
