<?php
    // CONNECT DATABASE...............
    $conn = new mysqli("localhost", "root", "", "plus_store");

    // CHECK CONNECTION..............
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // GET DATA FROM FORM.......................
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_comment'])) {

        $appName = $_POST['appName'];
        $comment = $_POST['comment'];

        // INSERT COMMENT TO DATABASE.....................
        $sql = "INSERT INTO comments (app_name, comment) VALUES ('$appName', '$comment')";
        $conn->query($sql);
        
    }

    // DELETE COMMENT FROM TABLE....................
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_comment'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM comments WHERE id='$id'";
        $conn->query($sql);
        
    }

    // UPDATE COMMENT FROM TABLE....................
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_comment'])) {
        $id = $_POST['id'];
        $appName = $_POST['appName'];
        $comment = $_POST['comment'];

        $sql = "UPDATE comments SET app_name='$appName', comment='$comment' WHERE id='$id'";
        $conn->query($sql);
        
    }

    // GET ALL COMMENTS FOR DISPLAY..................
    $comments_sql = "SELECT * FROM comments";
    $comments_result = $conn->query($comments_sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>
    <link rel="stylesheet" href="./whatsapp desc.css">
    <link rel="stylesheet" href="./whatsapp desc main.css">
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
    
    <br>
    <br>
    <main>

        <!-- APP DETAILS.............-->

        <section class="app-details">
        
            <div class="app-meta">
                <div class="app-image">
                    <img src="./images/Home icons/whatsapp.png" alt="App Icon">
                </div>
                <div class="rating-size">
                    <div class="rating">Rating<br><span class ="rate">4.0</span> <span class="stars">★★★★☆</span></div>
                    <div class="size">Size</span><br><span class="Asize">214</span><br><span class="mb">MB</span></div> 
                </div>
                <div class="name">Whatsapp</div>
                <button class="install-btn" onclick="document.location='https://www.whatsapp.com/download'">Install</button>
                <button class="plus-btn">+</button>

                <div class="starsrate">
                    <p id="rating">Rating : </p>
                    <span class="star" onclick="rate(1)">&#9733;</span>
                    <span class="star" onclick="rate(2)">&#9733;</span>
                    <span class="star" onclick="rate(3)">&#9733;</span>
                    <span class="star" onclick="rate(4)">&#9733;</span>
                    <span class="star" onclick="rate(5)">&#9733;</span>
                </div>
            </div>




            <!-- Description Section -->
            <div class="description">
                <h3>Description</h3>
                <p>WhatsApp is a free messaging app that lets you stay connected with friends and family through simple, fast, and secure messaging and calling.WhatsApp allows you to send text messages, make voice and video calls, share media files.
                    <br>
                    <br>
                    <h4>Key Features:</h4><br>
                    <ul type="square">
                    <li>Free Messaging & Calling: Send unlimited messages, photos, videos, and voice notes. Make crystal-clear voice and video calls, even with low data usage.</li>
                    <li>End-to-End Encryption: Your messages and calls are secured so only you and the person you're communicating with can read or listen to them.</li>
                    <li>Group Chats & Sharing: Easily create groups with your contacts to stay connected with multiple people at once. Share your favorite photos, videos, documents, and more.</li>
                </ul>
            </div>
        </section>
        
        <!-- ADD COMMENT.............-->
        
            <section class="addcmnt">
                <h3>Add Comment:</h3><br>
                <form method="POST" onsubmit="return submitmessage();">
                    <span>App Name:</span>
                    <input type="text" name="appName" required><br><br>
                    <span>Comment:</span><br><br>
                    <textarea name="comment" cols="70" rows="5" required></textarea><br><br>
                    <button type="submit" name="submit_comment" class="cmnt-btn">Submit</button>
                </form>
            </section>

            <!-- DISPLAY ALL COMMENTS SECTION................-->

            <section class="cmnt-list">
                <h3>All Comments:</h3><br>
                <?php 
                    if ($comments_result->num_rows > 0) {
                        while($row = $comments_result->fetch_assoc()) {
                ?>
                            <div class="comment_details">
                                <h4>
                                    <?php 
                                        echo "App Name : "; 
                                        echo $row['app_name']; 
                                    ?>
                                </h4><br>
                                <h4>
                                    <?php 
                                        echo "Comment : "; 
                                        echo $row['comment']; 
                                    ?>
                                </h4><br>

                                <!-- Edit and Delete Forms -->
                                <form method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    
                                    <label>Edit App Name :</label>
                                    <input type="text" name="appName" value="<?php echo $row['app_name']; ?>" required><br><br>
                                    
                                    <label>Edit Comment: </label>
                                    <textarea name="comment" cols="50" rows="3" required><?php echo $row['comment']; ?></textarea><br>
                                    
                                    <button type="submit" name="update_comment" class="updatebtn" onclick="return updatemessage();">Update</button>
                                    <button type="submit" name="delete_comment" class="deletebtn" onclick="return deletemessage();">Delete</button>
                                </form><br><br>
                            </div>
                <?php 
                        } 
                    } else {
                ?>
                        <p>No comments yet!</p>
                <?php 
                    } 
                ?>
</section>

</section>


    </main>

    <footer>
        <div class="footer">
            <div class="left">
                <button onclick="document.location='home.php'">Home</button>
                <button onclick="document.location='apps.html'">Apps</button>
                <button onclick="document.location='games.html'">Games</button>
                <button onclick="document.location='movies.html'">Movies</button>
                <button>More</button>
            </div>
            <div class="right">
                <button onclick="document.location='profile.html'">Profile</button>
                <button onclick="document.location='dev view/developer view/developer-view.php'">Developer Dashboard</button>
            </div>
        </div>
    </footer>
</body>
<script src="./whatsapp desc.js"></script>
<?php $conn->close(); ?>
</html>