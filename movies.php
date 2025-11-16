<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>
    <link rel="stylesheet" href="movies.css">
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
        <h3>New Movies &#11106</h3>
        <h3>Best Selling Movies &#11106</h3>
        <h3>Offers &#11106</h3>
    </div>

    <div class="app-store">
        <a href="https://yts.mx/movies/slingshot-2024" class="app-card">
            <img src="./images/Movies icons/sling shot.jpg" alt="App 1" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Sling Shot</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/slingshot-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/his-hers-2024" class="app-card">
            <img src="./images/Movies icons/his & hers.jpg" alt="App 2" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">His & Hers</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/his-hers-2024'">Download</button>
            </div>
        </a>

        <div class="vl"></div>

        <a href="https://yts.mx/movies/feet-of-death-2024" class="app-card">
            <img src="./images/Movies icons/feet of death.jpg" alt="App 3" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Feet of Death</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$3</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/feet-of-death-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/toofan-2024" class="app-card">
            <img src="./images/Movies icons/toofan.jpg" alt="App 4" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Toofan</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$3</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/toofan-2024'">Download</button>
            </div>
        </a>

        <div class="vl2"></div>

        <a href="https://yts.mx/movies/wynonna-earp-vengeance-2024" class="app-card">
            <img src="./images/Movies icons/Wynonna Earp.jpg" alt="App 5" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Wynonna Earp: Vengeance</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">Discount available: 1$</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/wynonna-earp-vengeance-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/officer-black-belt-2024" class="app-card">
            <img src="./images/Movies icons/officer black belt.jpg" alt="App 6" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Officer Black Belt</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">Discount available: 1$</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/officer-black-belt-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/uglies-2024" class="app-card">
            <img src="./images/Movies icons/uglies.jpg" alt="App 7" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Uglies</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/uglies-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/prepare-to-die-2024" class="app-card">
            <img src="./images/Movies icons/prepare to die.jpg" alt="App 8" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Prepare to Die</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/prepare-to-die-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/death-ph-d-2024" class="app-card">
            <img src="./images/Movies icons/death phd.jpg" alt="App 9" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Death P.H.D</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$3</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/death-ph-d-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/pechi-2024" class="app-card">
            <img src="./images/Movies icons/pechi.jpg" alt="App 10" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Pechi</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$3</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/pechi-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/long-gone-heroes-2024" class="app-card">
            <img src="./images/Movies icons/long gone heroes.jpg" alt="App 11" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Long Gone Heroes</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">Discount available: 1$</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/long-gone-heroes-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/rogue-warfare-2019" class="app-card">
            <img src="./images/Movies icons/rogue warfare.jpg" alt="App 12" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Rogue Warfare</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">Discount available: 1$</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/rogue-warfare-2019'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/the-demon-disorder-2024" class="app-card">
            <img src="./images/Movies icons/deamon disorder.jpg" alt="App 13" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">The Deamon Disorder.</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/the-demon-disorder-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/stopping-the-steal-2024" class="app-card">
            <img src="./images/Movies icons/stopping the steal.jpg" alt="App 14" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Stopping the Steal</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/stopping-the-steal-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/rebel-ridge-2024" class="app-card">
            <img src="./images/Movies icons/rebel ridge.jpg" alt="App 15" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Rebel Ridge</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$3</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/rebel-ridge-2024'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/the-emu-war-2023" class="app-card">
            <img src="./images/Movies icons/the emu war.jpg" alt="App 16" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">The Emu War</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">$3</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/the-emu-war-2023'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/widows-2018" class="app-card">
            <img src="./images/Movies icons/windows.jpg" alt="App 17" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Windows</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">Discount available: 1$</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/widows-2018'">Download</button>
            </div>
        </a>

        <a href="https://yts.mx/movies/best-cop-ever-2024" class="app-card">
            <img src="./images/Movies icons/best cop ever.jpg" alt="App 18" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Best Cop Ever</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <p class="app-rating">Discount available: 1$</p>
                <button class="install-button" onclick="document.location='https://yts.mx/movies/best-cop-ever-2024'">Download</button>
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