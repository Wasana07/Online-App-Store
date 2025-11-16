<?php
include 'connect.php';

$id = $_POST['id'];
$sql = "DELETE FROM task WHERE taskID=$id";
if ($con->query($sql)) {
    echo "Data deleted successfully";
    header('Location: read.php');
} else {
    echo "error" . $con->error;
}
$con->close();
?>