<?php

// CREATE CONNECTION................................
$conn = new mysqli("localhost", "root", "", "plus_store");

// CHECK CONNECTION.................................
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

// INITIALISE VARIABLES FOR UPDATE................................
$updateMode = false;
$email = '';
$firstname = '';
$lastname = '';
$username = '';
$password = '';

// ADDING USER........................................
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_user'])) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $sql = "INSERT INTO useraccount (email, firstName, lastName, userName, Password) VALUES ('$email', '$firstname', '$lastname', '$username', '$password')";
    $conn->query($sql);
}

// GET USER DATA TO PRE FILL FORM FOR UPDATING...........................
if (isset($_GET['edit'])) {
    $email = $_GET['edit'];
    $updateMode = true;
    $sql = "SELECT * FROM useraccount WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstname = $row['firstName'];
        $lastname = $row['lastName'];
        $username = $row['userName'];
        $password = $row['Password'];
    }
}

// UPDATE USER SECTION..........................................
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_user'])) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE useraccount SET 
            firstName='$firstname', lastName='$lastname', 
            userName='$username', Password='$password' 
            WHERE email='$email'";
    $conn->query($sql);

    // RETURN AGAIN TO ADD USER MODE......................................
    $updateMode = false;
    $email = '';
    $firstname = '';
    $lastname = '';
    $username = '';
    $password = '';
}

// DELETE USER DATA SECTION.......................................
if (isset($_GET['delete'])) {
    $email = $_GET['delete'];
    $sql = "DELETE FROM useraccount WHERE email='$email'";
    $conn->query($sql);
}


$sql = "SELECT * FROM useraccount";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./manage user.css">
    <title>Manage Users</title>
</head>
<body>



<!-- ADD AND UPDATE USER DATA FORM............................ -->
<button class='back-btn' onclick="document.location='admin-dashboard.php'">Back</button>
<div class="form-container">
    
    <form method="POST">

        <h2><?php echo $updateMode ? 'Update User' : 'Add User'; ?></h2>

        <input type="email" name="email" placeholder="Email" value="<?= $email ?>" required <?= $updateMode ? 'readonly' : '' ?>><br>
        <input type="text" name="firstname" placeholder="First Name" value="<?= $firstname ?>" required><br>
        <input type="text" name="lastname" placeholder="Last Name" value="<?= $lastname ?>" required><br>
        <input type="text" name="username" placeholder="User Name" value="<?= $username ?>" required><br>
        <input type="password" name="password" placeholder="Password" value="<?= $password ?>" required><br>
        <?php if ($updateMode): ?>
            <input type="submit" name="update_user" value="Update User" class="updateuserbtn" onclick="return userupdatemessage();">
        <?php else: ?>
            <input type="submit" name="add_user" value="Add User" class="adduserbtn" onclick="return usersubmitmessage();">
        <?php endif; ?>
    </form>
</div>

<!-- MANAGE USER TABLE.................................. -->
<h2 class="tabletopic">Manage Users</h2>
<table>
    <tr>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User Name</th>
        <th>Password</th>
        <th>Operations</th>
    </tr>
    <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['email'] ?></td>
            <td><?= $row['firstName'] ?></td>
            <td><?= $row['lastName'] ?></td>
            <td><?= $row['userName'] ?></td>
            <td><?= $row['Password'] ?></td>
            <td>
                <button class="editbtn"><a href="?edit=<?= $row['email'] ?>">Edit</a></button> |
                <button class="deletebtn"><a href="?delete=<?= $row['email'] ?>" onclick="return userdeletemessage();">Delete</a></button>
            </td>
        </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">No users found</td>
        </tr>
    <?php endif; ?>
</table>



<?php $conn->close(); ?>
<script src="manage user.js"></script>
</body>
</html>
