<!--            create database connection 
     ( connect database connection file to this file ) 
-->

<?php
        require 'connection.php';

       $gameTitle = $_POST["gtitle"];
       $gameDescription = $_POST["gdescription"];
       $gameCategory = $_POST["gcategory"];
       $gameLink = $_POST["glink"];
      

      $sql = "INSERT INTO app VALUES ('','', '$gameTitle' , '$gameDescription' , '$gameCategory' , '$gameLink' )";

      if($con->query($sql))
      {
          echo "successful";
      }

      else{
          echo "error".con->error;
      }

      $con->close();
?>

