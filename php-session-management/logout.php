<?php
// Start the session to access session data
session_start();

// Destroy all session data to log out the user
session_destroy();

// Redirect to index.php (login page)
header("Location: index.php");
exit(); // Ensure no further code runs after the redirect
