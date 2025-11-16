<?php

include 'connect.php';
//store data inside the data base
$id = $_POST['id'];
$result = $con->query("SELECT * FROM task WHERE taskID=$id");
$task = $result->fetch_assoc();


if(isset($_POST['submit']))
{
    $Tdescription=$_POST['description'];
    $Tdate=$_POST['date'];
    $Tstatus=$_POST['status'];
    $Temail=$_POST['email'];
    $taskId = $_POST['id'];
    
    $sql = "UPDATE task SET Description='$Tdescription', Date='$Tdate', Status='$Tstatus', email='$Temail' WHERE taskID=$taskId";
    if ($con->query($sql)) {
    
        header('Location:read.php');
    }
    else{
        echo"error".$con->error;
        header('read.php');
    }
   
}


   
$con->close();
?>

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="update.css">

    <title>Plus Store</title>
  </head>
  <body>

  <button class='back-btn' onclick="document.location='../admin-dashboard.php'">Back</button>
    <div class="container">
        <form method="post"  action="">
        <input type="hidden" name="id" value="<?php echo $task['taskID']; ?>" />
        <div class="form">
            <label>Description</label>
            <input type="text" class="form-control" placeholder="Enter description" name="description"
                   autocomplete="off" value="<?php echo $task['Description']; ?>">
        </div>

        <div class="form">
            <label>Date</label>
            <input type="date" class="form-control" placeholder="Enter date" name="date"
                   value="<?php echo $task['Date']; ?>" autocomplete="off">
        </div>

        <div class="form">
            <label>Status</label>
            <select class="form-control" name="status">
                <option value="pending" <?php if ($task['Status'] == 'pending') echo 'selected'; ?>>Pending</option>
                <option value="in_progress" <?php if ($task['Status'] == 'in_progress') echo 'selected'; ?>>In
                    progress
                </option>
                <option value="completed" <?php if ($task['Status'] == 'completed') echo 'selected'; ?>>Completed
                </option>
            </select>
        </div>
        <div class="form">
            <label>Assign Developer</label>
            <select class="form-control" name="email">
                <option value=""></option>
                <?php
                include 'connect.php';
                $developers = $con->query("SELECT * FROM adminAccount");
                $con->close();
                ?>
                <?php while ($row = $developers->fetch_assoc()) { ?>
                    <option value="<?php echo $row['email']; ?>" <?php if ($task['email'] == $row['email']) echo 'selected'; ?>><?php echo $row['email']; ?></option>
                <?php } ?>
            </select>
        </div>


        <button type="submit" class="btn btn-primary mt-3" name="submit" onclick="return updatemessage()">Update</button>
         </form>
</div>

   

    <script src="task.js"></script>
  </body>
</html>