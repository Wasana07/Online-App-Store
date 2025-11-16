<?php 
    $con = new mysqli("localhost","root","","plus_store");

    if($con->connect_error)
    {
        die("failed".$con->connect_error);
    }

?>