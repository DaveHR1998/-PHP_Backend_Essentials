<?php
include 'db.php';

// Check if an ID is provided via GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete the record
    $sql = "DELETE FROM users WHERE id = '$id'";
    $data = $conn->query($sql);

    if ($data) {
        header("Location: index.php");
    } else {
        echo "Error deleting user";
    }
}
?>
