<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>

<!-- start of the header -->
    <header class = "header">
        <div class = "logo">
            <img src = "logo.jpeg" alt = "App Store logo">
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

    <!-- page content -->
    
    <div class = "full-form">
        <form method = "POST" action ="app-upload-insert.php" >
            <div class="main-title">
                <h1><span> New Uploads </span></h1>
            </div>
            <br>

            <label for = "title" class = "title-text"> Title: </label>
            <br>
                <input type = "text" id ="title" class = "title-box" name="atitle" placeholder = "Add app title" required>
            <br>
            <br>

            <label for="desc" class="description-text"> Description: </label>
            <br>
                <input type = "text" id="desc" class = "description-box" name="adescription" placeholder = "Add app description " required>
            <br>
            <br>
            
            <label for = "cate" class = "category-text"> Category: </label>
            <br>
                <input type = "text" id ="cate" class = "category-box" name="acategory" placeholder = "Add app category" required>
            <br>
            <br>
            
            <label for = "link" class = "link-text"> Link: </label>
            <br>
                <input type = "text" id ="link" class = "link-box" name="alink" placeholder = "Add app link here" required>
            <br>
            <br>
    


            <button type="submit" class = "publish" onclick="return submitmessage()"> Submit </button>
            <br>
            <br>
            

            
        </form>
    </div>


     <!-- start of the footer -->
     <footer>
        <div class = "footer">
            <div class = "left">
                <button onclick="document.location = 'home.php'" > Home </button>
                <button onclick="document.location = 'apps.php' "> Apps </button>
                <button onclick="document.location = 'games.php' "> Games </button>
                <button onclick="document.location = 'movies.php' "> Movies </button>
            </div>

            <div class = "right">

                <button onclick="document.location = 'profile.php'" > Profile </button>
                <button onclick="document.location='developer-view.php'">Developer Dashboard</button>

            </div>
        </div>
    </footer>

    <script src="developerView.js"></script>
</body>
</html>