<?php

include 'connect.php';
$result = $con->query("SELECT * FROM task");
$con->close();


?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Task List</title>
    
    
    <link rel="stylesheet" href="read.css">
 </head>
 <body>
 <button class='back-btn' onclick="document.location='../admin-dashboard.php'">Back</button>
<div class="container">
    <h1 class="table-topic">Task List</h1>
    <button class="addtask-btn"><a href="task.php" class="text-light">Add Task</a></button>   

    <table class="table section">
      <thead>
        <tr>
          <th >Task ID</th>
          <th >Email</th>
          <th >Description</th>
          <th>Date</th>
          <th >Status</th>
          <th >Operations</th>
        </tr>
      </thead>
      <tbody>
              
        <?php while ($row = $result->fetch_assoc()) { ?>
            
          <tr>
            <td><?php echo $row['taskID']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <td><?php echo $row['Date']; ?></td>
            <td><?php echo ucwords(str_replace("_", " ", $row['Status'])) ?></td>
                      
            <td>
              <div class="row">
            <form method="post"  action="update.php">
              <input type="hidden" name="id" value="<?php echo $row['taskID']; ?>" />
              <button type="submit" class="updatebtn">Update</button>
        </form>
        <form method="post"  action="delete.php">
              <input type="hidden" name="id" value="<?php echo $row['taskID']; ?>" />
              <button type="submit" class="deletebtn" onclick="return deletemessage()">Delete</button>
        </form>
        </div>
            </td>
          </tr>

        <?php }?>
        
      </tbody>
    </table>
</div>  
<script src="task.js"></script>
</body>
</html>