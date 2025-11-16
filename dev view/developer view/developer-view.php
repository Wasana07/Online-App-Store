<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <meta name = "viewport" contect = "width=device-width,initial-scale=1.0">
        <title>Plus Store</title>
        <link rel="stylesheet" href="./main-developer-view.css"> 
        <link rel="stylesheet" href="./developer-view.css">
    </head>
    <body>
        <!-- start of the header -->
        <header class = "header">
            <div class = "logo">
                <img src = "./logo.jpeg" alt = "App Store logo">
            </div>

            <div class = "app-name">
                <h1>Plus Store</h1>
            </div>

            <div class = "search-box"> 
                <input type = "text" placeholder = "search for apps...">
            </div>

            <div class = "auth-buttons">
                <button class = "developer-view">Developer View</button>
                
            </div>
        </header>

        <button class='back-btn' onclick="document.location='.../home.php'">Back</button>
        <!-- start of the page content -->
        <div class="full-content">
            <div class ="outer-box">
                <button type="button" class="btn1" onclick="document.location='read-update-delete.php'">Your Apps</button>
                <br>
                <button type="menu" class="btn2" onclick="document.location='app-upload.php'">App Upload</button>
                <br>
                <button type="menu" class="btn3" onclick="document.location='game-upload.php'">Game Upload</button>
                <br>
                <button type="button" class="btn4" onclick="document.location='movie-upload.php'">Movie Upload</button>
            </div>

            <div class="poster">
                <img src="./image.jpg" alt="advertisement" class="poster">
            </div>
        
            
        </div>   
    </body>
</html>