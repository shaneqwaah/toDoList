<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM tasks ORDER BY id DESC");
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>To do List application PHP and MySQL database</title>
  </head>

  <h1> To do List application PHP and MySQL database</h1>
  <body>

    <form class="" action="add.php" method="post">
      <table width="80%" border="1">
        <tr>
          <td> <input type="text" name="task_name" size="70"> </td>

          <td> <button type="submit" name="Submit"> Add Task</button> </td>
        </tr>
    </table>
  </form>


        <table class="" width="80%" >
          <tr bgcolor = '#CCCCCC'>
            <td> N </td>
            <td> Tasks </td>
            <td> Action </td>
          </tr>

        <?php
        while($res = mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td>".$res['id']."</td>";
          echo "<td>".$res['task_name']."</td>";

          echo "<td> <a href=\"delete.php?id=$res[id]\"
          onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

        }
        ?>


      </table>

  </body>
</html>
