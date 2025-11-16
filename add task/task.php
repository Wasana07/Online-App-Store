<?php

include 'connect.php';
//store data inside the data base
if(isset($_POST['submit']))
{
    $Temail=$_POST['email'];
    $Tdescription=$_POST['description'];
    $Tdate=$_POST['date'];
    $Tstatus=$_POST['status'];
   



$sql="INSERT INTO task (taskID,email,Description,Date,Status) VALUES ('','$Temail',' $Tdescription','$Tdate','$Tstatus')";
if($con->query($sql))
{

    
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

   <link rel="stylesheet" href="task.css">
    

    <title>Add Task</title>
  </head>
  <body>
  <button class='back-btn' onclick="document.location='../admin-dashboard.php'">Back</button>
    <div class="container">
        <form method="post"  action="">

        <h2>Add Task</h2>

        <div class="form">
            <label>Assign Admin</label>
            <select class="from-control" name="email">
                <option value= ""></option>
                <?php
                include 'connect.php';
                $admin=$con->query("SELECT *FROM adminAccount");
                $con->close();
                ?>
                <?php while($row=$admin->fetch_assoc()){?>
                    <option value="<?php echo $row['email'];?>"><?php echo $row['email'];?></option>
                <?php } ?>
            </select>
        </div>




        <div class="form">
            <label>Description</label>
            <input type="text" class="form-control"  placeholder="Enter description" name="description" autocomplete="off">
        </div>

        <div class="form">
            <label>Date</label>
            <input type="date" class="form-control"  placeholder="Enter date" name="date"autocomplete="off">
        </div>

        <div class="form">
            <label>Status</label>
            <select class="form-control" name="status">
                <option value="pending">Pending</option>
                <option value="in_progress">In progress</option>
                <option value="completed">Completed</option>
            </select>
        </div>



        <button type="submit" class="submitbtn" name="submit" onclick="return submitmessage()">Submit</button>
         </form>
    </div>

   

    
  </body>
  <script src="task.js"></script>
</html>