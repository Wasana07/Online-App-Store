<?php

$serverName="localhost";
$userName="root";
$password="";
$dbName="plus_store";

$conn = new mysqli($serverName,$userName,$password,$dbName);

//check connection
if($conn->connect_error){
    die("Not Successful!".$conn->connect_error);
}

?>