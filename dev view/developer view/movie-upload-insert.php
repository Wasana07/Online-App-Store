<!--            create database connection 
     ( connect database connection file to this file ) 
-->

<?php
        require 'connection.php';

       $movieTitle = $_POST["mtitle"];
       $movieDescription = $_POST["mdescription"];
       $movieCategory = $_POST["mcategory"];
       $movieLink = $_POST["mlink"];
      

      $sql = "INSERT INTO app VALUES ('','', '$movieTitle' , '$movieDescription' , '$movieCategory' , '$movieLink' )";

      if($con->query($sql))
      {
          echo "successful";
      }

      else{
          echo "error".con->error;
      }

      $con->close();
?>

