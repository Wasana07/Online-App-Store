<?php

$con= new mysqli("localhost", "root", "", "plus_store") ;

// check conection
if($con->connect_error){
    die("Connection failed..!".$con->connect_error);
}

?>