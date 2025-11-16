<!--            create database connection 
     ( connect database connection file to this file ) 
-->

<?php
        require 'connection.php';

       $appTitle = $_POST["atitle"];
       $appDescription = $_POST["adescription"];
       $appCategory = $_POST["acategory"];
       $appLink = $_POST["alink"];
      

      $sql = "INSERT INTO app VALUES ('','', '$appTitle' , '$appDescription' , '$appCategory' , '$appLink' )";

      if($con->query($sql))
      {
        header('Location:developer-view.php');
      }

      else{
          echo "error".con->error;
      }

      $con->close();
?>

