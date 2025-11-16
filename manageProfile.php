<?php 
    // Start the session to access session variables
    session_start(); // THIS LINE HAS CHANGED

    // Include database connection file
    include("DB_Connection.php");

    // Check if the user is logged in, if not, redirect to the login page
    if (!isset($_SESSION["email"])) { // THIS LINE HAS CHANGED
        echo "<script>window.location.href = 'login.html';</script>"; // THIS LINE HAS CHANGED
        exit(); // THIS LINE HAS CHANGED
    }

    // Get the logged-in user's email from session
    $email = $_SESSION["email"]; // THIS LINE HAS CHANGED

    // Update the table details
    if (isset($_POST["change"])) {
        $uName = $_POST["Name"];
        $FName = $_POST["fName"];
        $LName = $_POST["lName"];
        $pWord = $_POST["Password"];

        $sql = "UPDATE useraccount SET 
                userName = '$uName',
                firstName = '$FName',
                lastName = '$LName',
                Password = '$pWord' 
                WHERE email = '$email'"; // THIS LINE HAS CHANGED

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Record updated successfully!');</script>";
        } else {
            echo "<script>alert('Error updating record: " . mysqli_error($conn) . "');</script>";
        }
    }

    // Delete user details
    if (isset($_POST["delete"])) {
        $sql = "DELETE FROM useraccount WHERE email = '$email'"; // THIS LINE HAS CHANGED

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Record deleted successfully!');</script>";
            echo "<script>window.location.href = 'user signup.html';</script>"; // THIS LINE HAS CHANGED
            session_destroy(); // Destroy the session after deletion // THIS LINE HAS CHANGED
        } else {
            echo "<script>alert('Error deleting record: " . mysqli_error($conn) . "');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Profile</title>
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./manageProfile.css">
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
    
    <br><br>

    <?php
    // Select the logged-in user's details from the useraccount table
    $select_data = "SELECT * FROM useraccount WHERE email = '$email'"; // THIS LINE HAS CHANGED
    $result = mysqli_query($conn, $select_data);

    // Check if the details are retrieved successfully
    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Display the user's details in the form
        echo "
        <main>
            <div class='manage-profile'>
                <form action='#' method='POST'>
                    <br>
                    <h3>Manage Profile</h3>
                    <span>Email : </span>
                    <input type='email' name='Email' class='cEmail' value='".$data['email']."' readonly> <!-- THIS LINE HAS CHANGED: Read-only email -->
                    <br><br>
                    <span>User Name</span>
                    <input type='text' name='Name' class='cName' value='".$data['userName']."'>
                    <br><br>
                    <span>First Name</span>
                    <input type='text' name='fName' class='cFName' value='".$data['firstName']."'>
                    <br><br>
                    <span>Last Name</span>
                    <input type='text' name='lName' class='cLName' value='".$data['lastName']."'>
                    <br><br>
                    <span>Password</span>
                    <input type='password' name='Password' class='cPassword' value='".$data['Password']."'>
                    <br><br>
                    <input type='submit' name='delete' id='delete' value='Delete'>
                    <input type='submit' name='change' id='change' value='Change'>
                </form>
            </div>
        </main>
        ";   
    } else {
        // If no data is retrieved, display a message
        echo "<p>No user data found for the logged-in account.</p>"; // THIS LINE HAS CHANGED
    }
    ?>

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