<?php

  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST['username'];
    $password = $_POST['password'];

    $servername = "localhost";  
    $dbUsername = "root";  
    $dbPassword = "";  
    $dbName = "plus_store";  
    
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM useraccount WHERE email = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();          
        $_SESSION['email'] = $username;
        header("Location: home.php");
        exit();
    } 

    $sql = "SELECT * FROM adminaccount WHERE email = ? AND addPassword = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start(); 
        $_SESSION['email'] = $username;
        header("Location: admin-dashboard.php");
        exit();
    } else {
       
        echo "Invalid username or password";
    }

    
    $stmt->close();
    $conn->close();
}
?>
