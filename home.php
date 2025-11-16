<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>

    <!-- HEADER HTML.................................................................................... -->
    <?php

    if(!empty( $_SESSION['email'])){
        require_once 'headerLoggedIn.php';
    }
    else{
        require_once 'headerNotSignIn.php';
    }

    ?>


    <!-- SLIDER.............................................................................................. -->

    <div class="container">
        <div class="slider">
            <img src="./images/slider images/pubg slider.jpg" alt="">
            <img src="./images/slider images/cod slider.jpg" alt="">
            <img src="./images/slider images/coc slider.jpg" alt="">
            <img src="./images/slider images/freefire slider.jpg" alt="">
            <img src="./images/slider images/shadow fight slider.jpg" alt="">
            <img src="./images/slider images/capcut slider.png" alt="">
            <img src="./images/slider images/zoom slider.jpg" alt="">
            <img src="./images/slider images/my dialog slider.jpeg" alt="">
        </div>
    </div>

    <!-- SLIDESHOW DESCRIPTION......................................................................................... -->

    <div class="sliderdesc">
        <h3><marquee behavior="" direction="">Click here to get latest offers.....</marquee></h3>
    </div>

    <!-- APP DIVISION............................................................................................ -->

    <div class="app-store">
        <a href="./whatsappDesc.php" class="app-card">
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

        <a href="./pubg desc.html" class="app-card">
            <img src="./images/Home icons/pubg.jpeg" alt="App 3" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">PUBG</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='pubg desc.html'">Install</button>
            </div>
        </a>

        <a href="./messenger desc.html" class="app-card">
            <img src="./images/Home icons/messenger.jpeg" alt="App 4" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Messenger</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='messenger desc.html'">Install</button>
            </div>
        </a>

        <a href="./instagram desc.html" class="app-card">
            <img src="./images/Home icons/instagram.jpeg" alt="App 5" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Instagram</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='instagram desc.html'">Install</button>
            </div>
        </a>

        <a href="./coc desc.html" class="app-card">
            <img src="./images/Home icons/coc.jpeg" alt="App 6" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Coc</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='coc desc.html'">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/cod.jpeg" alt="App 7" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Cod</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/telegram.png" alt="App 8" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Telegram</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/shadow fight.jpeg" alt="App 9" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Shadow Fight</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/tik tok.png" alt="App 10" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Tik Tok</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/teams.jpeg" alt="App 11" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Teams</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/free fire.jpeg" alt="App 12" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Free Fire</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/helakuru.jpeg" alt="App 13" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Helakuru</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/share it.png" alt="App 14" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Share It</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/chrome.png" alt="App 15" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Chrome</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/among us.jpeg" alt="App 16" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Among Us</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/hill climb racing.png" alt="App 17" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Hill Climb Racing</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/imo.png" alt="App 18" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Imo</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

    </div>

    <!-- SLIDESHOW DESCRIPTION........................................................................................ -->

    <div class="browsemore">
        <button>Browse More &#11106</button>
    </div>

    <!-- FOOTER HTML.................................................................................................. -->

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
