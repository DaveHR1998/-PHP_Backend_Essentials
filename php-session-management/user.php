<?php
session_start(); // Start session at the very beginning

// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session variables
    $_SESSION['username'] = $_POST["username"];
    $_SESSION['description'] = $_POST["description"];

    // Redirect to home.php and ensure no further code runs
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>
<body>
    <!-- User Profile Update Form -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="user">Username:</label>
        <input type="text" name="username" id="user" required>
        <br>
        
        <label for="desc">Description:</label>
        <textarea name="description" id="desc" cols="30" rows="10" required></textarea>
        <br>
        
        <input type="submit" value="Update Profile">
    </form>
</body>
</html>
