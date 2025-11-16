<?php
//if user not logged in,redirect to home............
session_start();
if(empty( $_SESSION['email'])){
    header('Location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>
    <link rel="stylesheet" href="admin-dashboard.css">
</head>

<body>

    <header class="header">
        <div class="logo">
            <img src="./images/Plus store logo/logo.jpeg" alt="App Store Logo">
        </div>
        <div class="app-name">
            <h1>Plus Store</h1>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search for apps...">
        </div>
        <div class="auth-button">
            <button class="dashboard">ADMIN DASHBOARD</button>
            <button class="sign-out" onclick="document.location='signOut.php'">Sign Out</button>
        </div>
    </header>

    <body>
        <div class="container">
            <!-- Header -->
            <header>
                <h1>Header</h1>
            </header>

            <div class="content">
                <!-- Left Side Menu -->
                <div class="menu">
                    <button>Manage Apps</button>
                    <button onclick="document.location='add task/read.php'">Task List</button>
                    <button onclick="document.location='add task/task.php'">Add Task</button>
                    <button onclick="document.location='manage-user.php'">Manage Users</button>
                    
                </div>
            </div>
        </div>

        <footer>
        <div class="footer">
            <div class="left">
                <button onclick="document.location='home.php'">Home</button>
                <button onclick="document.location='apps.php'">Apps</button>
                <button onclick="document.location='games.php'">Games</button>
                <button onclick="document.location='movies.php'">Movies</button>
            </div>
            <div class="right">
                <button onclick="document.location='profile.php'">Profile</button>
                <button onclick="document.location='settings.php'">Settings</button>
            </div>
        </div>
    </footer>
    </body>

</html>