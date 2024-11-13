<?php
// Start the session to enable session data usage
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // Initialize an array to store user information
    $user = [
        "username" => "",
        "password" => "",
        "email" => "",
        "description" => ""
    ];

    // Check if session variables are set and assign them to the $user array
    if (isset($_SESSION["user"])) {
        $user['email'] = $_SESSION["user"];
        $user['password'] = $_SESSION["password"];
    }
    if (isset($_SESSION["username"])) {
        $user['username'] = $_SESSION["username"];
    }
    if (isset($_SESSION["description"])) {
        $user['description'] = $_SESSION["description"];
    }
    ?>

    <?php if (isset($_SESSION["username"])): ?>
        <!-- Display each user detail stored in the $user array -->
        <?php foreach ($user as $key => $value): ?>
            <h1><?php echo htmlspecialchars($key) . ": " . htmlspecialchars($value); ?></h1>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Links to update profile and logout pages -->
    <a href="user.php">Update profile</a>
    <a href="logout.php">Logout</a>
</body>
</html>
