<?php
include("DB_Connection.php");

//Insert data
if(isset($_POST["submit"])){

    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $Uname = $_POST['username'];
    $Email = $_POST['email'];
    $PWD = $_POST['cpwd'];

    $sql = "INSERT INTO useraccount VALUES('$Email','$Fname','$Lname','$Uname','$PWD')";
    $insertData = mysqli_query($conn,$sql);

}

header('Location:login.html');

?>