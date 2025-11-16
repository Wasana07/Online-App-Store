<?php
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>
    <link rel="stylesheet" href="./profile.css">
</head>
<body>

<?php

if(!empty( $_SESSION['email'])){
    require_once 'headerLoggedIn.php';
}
else{
    require_once 'headerNotSignIn.php';
}

?>
    
    <button class="back-button" onclick="window.history.back()">&#8249;</button>

    <br>
    <br>
        
        <main>
            <div class="content">
                <div class="pic">
                   <img src="./images/profile image/img.png" alt="profile pic">
                </div>
                <div class="user-info">
                    <p>User Name<br>Email</p>
                    <hr><br>
                </div>   
                <div class="Profile-segments">
                    <button class="manage-profile" onclick="document.location='manageProfile.php'">Manage your profile</button>
                    <br>
                    <br>
                    <button class="add-another">Add another account</button>
                    <br>
                    <br>
                    <button class="Sign-out" onclick="document.location='signOut.php'">Sign out</button>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <button class="downloaded-apps">Downloaded Apps</button>
                    <br>
                    <br>
                    <button class="notifications">Notifications</button>
                    <br>
                    <br>
                    <button class="feedback">Feedback Us</button>
                    <br>
                    <br>
                </div>
            </div>
        </main>


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
                <button onclick="document.location='dev view/developer view/developer-view.php'">Developer Dashboard</button>
            </div>
        </div>
    </footer>
</body>
</html>
