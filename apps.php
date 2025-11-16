<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>
    <link rel="stylesheet" href="apps.css">
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

    <div class="app_category">
        <h3>Top Free Apps &#11106</h3>
        <h3>Best Selling Apps &#11106</h3>
        <h3>Essential Apps &#11106</h3>
    </div>

    <div class="app-store">
        <a href="whatsappDesc.php" class="app-card">
            <img src="./images/Home icons/whatsapp.png" alt="App 1" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Whatsapp</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='whatsappDesc.php'">Install</button>
            </div>
        </a>

        <a href="./fb desc.html" class="app-card">
            <img src="./images/Home icons/fb.jpeg" alt="App 2" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Facebook</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='fb desc.html'">Install</button>
            </div>
        </a>

        <div class="vl"></div>

        <a href="./photoshop desc.html" class="app-card">
            <img src="./images/app page icons/Adobe_Photoshop.png" alt="App 3" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Adobe Photoshop</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$25</p>
                <button class="install-button" onclick="document.location='photoshop desc.html'">Install</button>
            </div>
        </a>

        <a href="./lightroom desc.html" class="app-card">
            <img src="./images/app page icons/adobe light room.png" alt="App 4" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Adobe Lightroom</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$20</p>
                <button class="install-button" onclick="document.location='photoshop desc.html'">Install</button>
            </div>
        </a>

        <div class="vl2"></div>

        <a href="./applemusic desc.html" class="app-card">
            <img src="./images/app page icons/Apple_Music_icon..png" alt="App 5" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Apple Music</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='applemusic desc.html'">Install</button>
            </div>
        </a>

        <a href="./firefox desc.html" class="app-card">
            <img src="./images/app page icons/firefox.png" alt="App 6" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Firefox</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='firefox desc.html'">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/app page icons/capcut.png" alt="App 7" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Capcut</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/app page icons/netflix.png" alt="App 8" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Netflix</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/app page icons/FL_Studio_Mobile_icon.png" alt="App 9" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">FL Studio Mobile</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$30</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/app page icons/4ukey.png" alt="App 10" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">4UKey for IOS</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$18</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/messenger.jpeg" alt="App 11" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Messenger</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/app page icons/audacity.jpeg" alt="App 12" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Audacity</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/app page icons/snapchat.png" alt="App 13" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Snapchat</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/app page icons/spotify.jpg" alt="App 14" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Spotify</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/app page icons/sketchbook pro.png" alt="App 15" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Sketchbook Pro</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$22</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/app page icons/foxit pdf editor.png" alt="App 16" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Foxit Pdf Editor</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$12</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/telegram.png" alt="App 17" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Telegram</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/app page icons/tera box.png" alt="App 18" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Tera Box for PC</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>
    </div>

    <div class="browsemore">
        <button>Browse More &#11106</button>
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
                <button onclick="document.location='dev view/developer view/developer-view.php'">Developer Dashboard</button>
            </div>
        </div>
    </footer>

</body>
</html>