<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>
    <link rel="stylesheet" href="games.css">
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
        <h3>Top Free Games &#11106</h3>
        <h3>Classic Games &#11106</h3>
        <h3>Kids Games &#11106</h3>
    </div>

    <div class="app-store">
        <a href="./solitare collection desc.html" class="app-card">
            <img src="./images/Game icons/ms solitaire collection.png" alt="App 1" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">MS Solitaire Collection</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='solitare collection desc.html'">Install</button>
            </div>
        </a>

        <a href="./beach buggy desc.html" class="app-card">
            <img src="./images/Game icons/beach buggy.png" alt="App 2" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Beach Buggy Racing..</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='beach buggy desc.html'">Install</button>
            </div>
        </a>

        <div class="vl"></div>

        <a href="./8 ball desc.html" class="app-card">
            <img src="./images/Game icons/8 ball pool.jpeg" alt="App 3" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">8 Ball Pool</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='8 ball desc.html'">Install</button>
            </div>
        </a>

        <a href="./angry birds desc.html" class="app-card">
            <img src="./images/Game icons/angry birds.png" alt="App 4" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Angry Birds 2</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='angry birds desc.html'">Install</button>
            </div>
        </a>

        <div class="vl2"></div>

        <a href="./talking tom 2 desc.html" class="app-card">
            <img src="./images/Game icons/talking tom.png" alt="App 5" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">My Talking Tom 2</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='talking tom 2 desc.html'">Install</button>
            </div>
        </a>

        <a href="./burger shop 2 desc.html" class="app-card">
            <img src="./images/Game icons/my burger shop 2.png" alt="App 6" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">My Burger Shop 2</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button" onclick="document.location='burger shop 2 desc.html'">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Home icons/coc.jpeg" alt="App 7" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Coc</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/subway surfers.jpg" alt="App 8" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Subway Surfers</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/soduko.png" alt="App 9" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Soduko</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/csr2.png" alt="App 10" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">CSR2 Game</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/candy crush.png" alt="App 11" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Candy Crush</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/sonic dash.png" alt="App 12" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Sonic Dash</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/carrom pool.jpeg" alt="App 13" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Carrom Pool</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/temple run.png" alt="App 14" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Temple Run 2</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/Fruit-Ninja-.jpg" alt="App 15" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Fruit Ninja</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/WCC2.jpeg" alt="App 16" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">WCC2</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/youtube kids.jpg" alt="App 17" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">Youtube Kids</h2>
                <p class="app-rating">★★★★☆ (4.5)</p>
                <button class="install-button">Install</button>
            </div>
        </a>

        <a href="#" class="app-card">
            <img src="./images/Game icons/my talking angela.png" alt="App 18" class="app-icon">
            <div class="app-details">
                <h2 class="app-title">My Talking Angela</h2>
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