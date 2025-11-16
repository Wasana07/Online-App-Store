<?php
require 'connection.php'; //connection


$row = null;

// update 
if (isset($_POST["updateID"])) {
    $id = $_POST["updateID"];
    $sql = "SELECT appID, appName, descriptions, category, links FROM app WHERE appID = ?";
    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "<p>No app found with that ID.</p>";
            exit();
        }
        $stmt->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["aid"])) {
    $updateID = $_POST["aid"];
    $nm = $_POST["atitle"];
    $des = $_POST["adescription"];
    $cat = $_POST["acategory"];
    $link = $_POST["alink"];

    $sql = "UPDATE app SET appName = ?, descriptions = ?, category = ?, links = ? WHERE appID = ?";
    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param("ssssi", $nm, $des, $cat, $link, $updateID);

        if ($stmt->execute()) {

        } else {
            echo "Error updating app: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }
}

//delete 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deleteID"])) {
     $deleteID = $_POST["deleteID"];
     $sql = "DELETE FROM app WHERE appID = ?";
     if ($stmt = $con->prepare($sql)) {
         $stmt->bind_param("i", $deleteID);

         if ($stmt->execute()) {
            
         } else {
             echo "Error deleting app: " . $stmt->error;
         }
         $stmt->close();
     } else {
         echo "Error preparing statement: " . $con->error;
     }
 }

// read
$sqll = "SELECT appID, appName, descriptions, category, links FROM app";
$result = $con->query($sqll);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Management</title>
    <link rel="stylesheet" href="read-update-delete.css"> 
    
</head>
<body>

<button class='back-btn' onclick="document.location='developer-view.php'">Back</button>
    <h1>App Management</h1>

    <table border="1" class="table">
        <tr class="heading-row">
            <th>ID</th>
            <th>App Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>App Link</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($rowApp = $result->fetch_assoc()) {
                echo "<tr class='data-rows'>";
                echo "<td>" . $rowApp["appID"] . "</td>
                      <td>" . htmlspecialchars($rowApp["appName"]) . "</td>
                      <td>" . htmlspecialchars($rowApp["descriptions"]) . "</td>
                      <td>" . htmlspecialchars($rowApp["category"]) . "</td>
                      <td><a href = '#'> " . htmlspecialchars($rowApp["links"]) . "</a></td>
                      <td>
                          <form method='POST' action=''>
                              <input type='hidden' name='updateID' value='" . $rowApp["appID"] . "'>
                              <input type='submit' name='update' value='Update' class='updatebtn'>
                          </form>
                      </td>
                      <td>
                      <form method='POST' action='' onclick=\"return alert('Deleted Successfully')\">
                              <input type='hidden' name='deleteID' value='" . $rowApp["appID"] . "'>
                              <input type='submit' name='delete' value='Delete' class='deletebtn'>
                          </form>
                      </td>";      
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No results</td></tr>";
        }
        ?>
    </table>

    <?php if ($row): ?>
    <div class="full-form">
        <h2>Update App Details</h2>
        <form method="POST" action="">
            <input type="hidden" name="aid" value="<?php echo htmlspecialchars($row['appID']); ?>">
            <label for="title">Title:</label>
            <input type="text" id="title" name="atitle" required value="<?php echo htmlspecialchars($row['appName']); ?>">

            <label for="desc">Description:</label>
            <input type="text" id="desc" name="adescription" required value="<?php echo htmlspecialchars($row['descriptions']); ?>">

            <label for="cate">Category:</label>
            <input type="text" id="cate" name="acategory" required value="<?php echo htmlspecialchars($row['category']); ?>">

            <label for="link">Link:</label>
            <input type="text" id="link" name="alink" required value="<?php echo htmlspecialchars($row['links']); ?>">

            <button type="submit" class="publish" onclick="return updatemessage()">Update</button>
        </form>
    </div>
    <?php endif; ?>
    <script src="developerView.js"></script>
</body>
</html>

<?php
$con->close();
?>
