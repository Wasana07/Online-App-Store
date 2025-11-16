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
        <form method = "POST" action ="movie-upload-insert.php" >
            <div class="main-title">
                <h1><span> New Uploads </span></h1>
            </div>
            <br>

            <label for = "title" class = "title-text"> Title: </label>
            <br>
                <input type = "text" id ="title" class = "title-box" name="mtitle" placeholder = "Add movie title" required>
            <br>
            <br>

            <label for="desc" class="description-text"> Description: </label>
            <br>
                <input type = "text" id="desc" class = "description-box" name="mdescription" placeholder = "Add movie description " required>
            <br>
            <br>
            
            <label for = "cate" class = "category-text"> Category: </label>
            <br>
                <input type = "text" id ="cate" class = "category-box" name="mcategory" placeholder = "Add movie category" required>
            <br>
            <br>

            <label for = "link" class = "link-text"> Link: </label>
            <br>
                <input type = "text" id ="link" class = "link-box" name="mlink" placeholder = "Add movie link here" required>
            <br>
            <br>
            
           
    

            <button type="submit" class = "publish"> Submit </button>
            <br>
            <br>
            

            
        </form>
    </div>


     <!-- start of the footer -->
     <footer>
        <div class = "footer">
            <div class = "left">
                <button onclick="document.location = 'home.html'" > Home </button>
                <button onclick="document.location = 'apps.html' "> Apps </button>
                <button onclick="document.location = 'games.html' "> Games </button>
                <button onclick="document.location = 'movies.html' "> Movies </button>
            </div>

            <div class = "right">

                <button onclick="document.location = 'profile.html'" > Profile </button>
                <button onclick="document.location='developer-view.php'">Developer Dashboard</button>

            </div>
        </div>
    </footer>

    
</body>
</html>