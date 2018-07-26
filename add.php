<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add tasks</title>
  </head>
  <body>
    <?php
        include_once("config.php");

        if(isset($_POST['Submit'])) {
          $task =$_POST['task_name'];


        if(empty($task)){{
          echo "<font color= 'red'>Task name field is empty.</font><br/>";
        }
        echo "<br/> <a href ='javascript:self.history.back();'> Go Back</a>";

        } else {
        $result = mysqli_query($mysqli, "INSERT INTO tasks(task_name)VALUES('$task')");
        echo "<font color='green'> Your information has been added successfully.";
        echo "<br/><a href='index.php'> View Result</a>";
       }


     }

     ?>
  </body>
</html>
